resource "aws_launch_configuration" "LC" {
  image_id = var.image
  instance_type = var.instance_type
  security_groups = [aws_security_group.AppserverSG.id]
  iam_instance_profile = aws_iam_instance_profile.test_profile.name
  key_name = var.key
  associate_public_ip_address = true
  user_data = data.template_file.LC.rendered
  root_block_device {
       volume_type           = "gp2"
       volume_size           = var.size
       delete_on_termination = "true"
    }
  lifecycle {
    create_before_destroy = true
  }
}
data "template_file" "LC" {
  template = file("install.sh")
}

resource "aws_autoscaling_group" "ASG" {
  launch_configuration = aws_launch_configuration.LC.id
  vpc_zone_identifier = [ aws_subnet.Publicsubnet1.id,aws_subnet.Publicsubnet2.id ]
  min_size = var.minValue
  max_size = var.maxValue
  tags = [
{
    key = "Name"
    value = "autoscale"
    propagate_at_launch = true
  }
]
}

resource "aws_security_group" "LBSG" {
  name = "load-balancer-SG"
  vpc_id      = aws_vpc.MyVPC.id
  
  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
  
  ingress {
    from_port = 80
    to_port = 80
    protocol = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

resource "aws_lb" "alb" {  
  name            = "alb"  
  subnets         = [ aws_subnet.Publicsubnet1.id, aws_subnet.Publicsubnet2.id ]
  security_groups = [ aws_security_group.LBSG.id ]
  internal        = false 
  idle_timeout    = 60   
  tags = {    
    Name    = "alb"    
  }  
  provisioner "local-exec" {
    command = "echo ${aws_lb.alb.dns_name} >> /var/lib/jenkins/workspace/Drupalmulti/publicip"
}
}

resource "aws_lb_target_group" "alb_target_group" {  
  name     = "alb-target-group"  
  port     = "80"  
  protocol = "HTTP"  
  vpc_id   = aws_vpc.MyVPC.id
  tags = {    
    name = "alb_target_group"    
  }   
  stickiness {    
    type            = "lb_cookie"    
    cookie_duration = 1800    
    enabled         = true 
  }   
  health_check {    
    healthy_threshold   = 3    
    unhealthy_threshold = 10    
    timeout             = 5    
    interval            = 10    
    path                = "/"    
    port                = 80
  }
}

resource "aws_lb_target_group_attachment" "tga" {
  target_group_arn = aws_lb_target_group.alb_target_group.arn
  target_id        = aws_instance.Appserver1.id
  port             = 80
}
resource "aws_lb_target_group_attachment" "tga2" {
  target_group_arn = aws_lb_target_group.alb_target_group.arn
  target_id        = aws_instance.Appserver2.id
  port             = 80
}

resource "aws_autoscaling_attachment" "alb_autoscale" {
  alb_target_group_arn   = aws_lb_target_group.alb_target_group.arn
  autoscaling_group_name = aws_autoscaling_group.ASG.id
}

resource "aws_lb_listener" "alb_listener" {  
  load_balancer_arn = aws_lb.alb.arn  
  port              = 80 
  protocol          = "HTTP"
  
  default_action {    
    target_group_arn = aws_lb_target_group.alb_target_group.arn
    type             = "forward"  
  }
}
resource "aws_iam_role" "test_role" {
  name = "test_roles"

  assume_role_policy = <<EOF
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Action": "sts:AssumeRole",
      "Principal": {
        "Service": "ec2.amazonaws.com"
      },
      "Effect": "Allow",
      "Sid": ""
    }
  ]
}
EOF

  tags = {
      tag-key = "dbrole"
  }
}
resource "aws_iam_instance_profile" "test_profile" {
  name = "test_profiles"
  role = aws_iam_role.test_role.name
}
resource "aws_iam_role_policy" "test_policy" {
  name = "test_policies"
  role = aws_iam_role.test_role.id

  policy = <<EOF
{   
    "Version": "2012-10-17",   
    "Statement": [  {
        "Effect": "Allow",
        "Action": [
            "rds:DescribeDBInstances"
        ],
        "Resource": [
            "*"
        ]
    }]
}
EOF
}
