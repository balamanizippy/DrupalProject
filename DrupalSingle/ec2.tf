##### EC2 Instance ######

resource "aws_instance" "Drupal" {
 ami                         = var.image
 instance_type               = var.instance_type
 key_name                    = var.key
 monitoring                  = true
 user_data                   = data.template_file.drupal.rendered
 vpc_security_group_ids      = [aws_security_group.sg.id]
 subnet_id                   = aws_subnet.public_subnet.id
 associate_public_ip_address = true 
 root_block_device {
   volume_type           = "gp2"
   volume_size           = var.size
   delete_on_termination = "true"
 }
 tags = {
   Name        = "Drupal"
   }
provisioner "local-exec" {
    command = "echo ${aws_instance.Drupal.public_ip} >> /var/lib/jenkins/workspace/DrupalMultiChoice/publicip"
}


}

data "template_file" "drupal" {
  template = file("install.sh")
}


####### Security Group #########

resource "aws_security_group" "sg" {
 vpc_id      = aws_vpc.vpc_name.id
 name        = "security-group"
 description = "Allow SSH and http and https"
 ingress {
   from_port   = 22
   to_port     = 22
   protocol    = "tcp"
   cidr_blocks = ["0.0.0.0/0"]
 }
 egress {
   from_port   = 0
   to_port     = 0
   protocol    = "-1"
   cidr_blocks = ["0.0.0.0/0"]
 }
 
 ingress {
       from_port   = 80
       to_port     = 80
       protocol    = "tcp"
       cidr_blocks = ["0.0.0.0/0"]
 }
 ingress {
       from_port   = 443
       to_port     = 443
       protocol    = "tcp"
       cidr_blocks = ["0.0.0.0/0"]
   }
 
   egress {
       from_port   = 80
       to_port     = 80
       protocol    = "tcp"
       cidr_blocks = ["0.0.0.0/0"]
   }
   egress {
       from_port   = 443
       to_port     = 443
       protocol    = "tcp"
       cidr_blocks = ["0.0.0.0/0"]
   }
   
 tags = {
   Name        = "karthi-sg"
  }
}

