resource "aws_vpc" "MyVPC" {
         cidr_block = "10.0.0.0/20"
enable_dns_hostnames = "true"
tags =  {
         Name = "VPC"
        }
}

resource "aws_subnet" "Publicsubnet1" {
        vpc_id = aws_vpc.MyVPC.id
        cidr_block = "10.0.0.0/24"
        availability_zone = "us-east-1a"
tags = {
        Name = "Subnets"
       }
}

resource "aws_subnet" "Publicsubnet2" {
        vpc_id = aws_vpc.MyVPC.id
        cidr_block = "10.0.4.0/24"
        availability_zone = "us-east-1b"
tags = {
        Name = "Subnets"
     }
}

resource "aws_instance" "Appserver1" {
ami = var.image
instance_type = var.instance_type
subnet_id = aws_subnet.Publicsubnet1.id
iam_instance_profile = aws_iam_instance_profile.test_profile.name
key_name = var.key
user_data = data.template_file.Appserver1.rendered
get_password_data = "false"
availability_zone = "us-east-1a"
security_groups = [aws_security_group.AppserverSG.id]
associate_public_ip_address = true
root_block_device {
       volume_type           = "gp2"
       volume_size           = var.size
       delete_on_termination = "true"
}
tags =  {
       Name = "Appserver1"
     }
provisioner "local-exec" {
    command = "echo ${aws_instance.Appserver1.public_ip} >> /var/lib/jenkins/workspace/DrupalMultiChoice/publicip1"
}
}
data "template_file" "Appserver1" {
  template = file("install.sh")
}

resource "aws_instance" "Appserver2" {
ami = var.image
instance_type = var.instance_type
subnet_id = aws_subnet.Publicsubnet2.id
iam_instance_profile = aws_iam_instance_profile.test_profile.name
key_name = var.key
user_data = data.template_file.Appserver2.rendered
get_password_data = "false"
availability_zone = "us-east-1b"
security_groups = [aws_security_group.AppserverSG.id]
associate_public_ip_address = true
root_block_device {
       volume_type           = "gp2"
       volume_size           = "10"
       delete_on_termination = "true"
}
tags =  {
       Name = "Appserver2"
     }
provisioner "local-exec" {
    command = "echo ${aws_instance.Appserver2.public_ip} >> /var/lib/jenkins/workspace/DrupalMultiChoice/publicip2"
}
}
data "template_file" "Appserver2" {
  template = file("install.sh")
}

resource "aws_internet_gateway" "IGW"{
vpc_id = aws_vpc.MyVPC.id

tags = {
       Name = "internet gateway1"
     }
}

resource "aws_route_table_association" "prta1" {
subnet_id = aws_subnet.Publicsubnet1.id
route_table_id = aws_route_table.prt1.id
}

resource "aws_route_table_association" "prta2" {
subnet_id = aws_subnet.Publicsubnet2.id
route_table_id = aws_route_table.prt2.id
}

resource "aws_route_table" "prt1" {
vpc_id = aws_vpc.MyVPC.id

route{
cidr_block = "0.0.0.0/0"
gateway_id = aws_internet_gateway.IGW.id
}

tags = {
       Name = "Publicroute1"

}
}
resource "aws_route_table" "prt2" {
vpc_id = aws_vpc.MyVPC.id

route{
cidr_block = "0.0.0.0/0"
gateway_id = aws_internet_gateway.IGW.id
}

tags = {
       Name = "Publicroute2"

}
}


resource "aws_security_group" "AppserverSG" {
vpc_id = aws_vpc.MyVPC.id
ingress {
      protocol = "tcp"
      self = true
      from_port = 22
      to_port = 22
      cidr_blocks = ["0.0.0.0/0"]
         }

egress {
      from_port = 0
      to_port = 0
      protocol = "-1"
      cidr_blocks = ["0.0.0.0/0"]
      }

ingress {
      protocol = "tcp"
      self  = true
      from_port = 80
      to_port = 80 
      cidr_blocks = ["0.0.0.0/0"]
        }

ingress {
      protocol = "tcp"
      self  = true
      from_port = 3306
      to_port = 3306
      cidr_blocks = ["0.0.0.0/0"]
        }
egress {
      protocol = "tcp"
      self  = true
      from_port = 3306
      to_port = 3306
      cidr_blocks = ["0.0.0.0/0"]
        }
tags = {
       Name = "AppserverSG"
     }

}

resource "aws_db_instance" "RDS" {
allocated_storage = "10"
storage_type = "gp2"
engine = "mysql"
engine_version = "5.7"
instance_class = "db.t2.micro"
name = "zippyops_db"
username = "zippyops"
password = "zippyops"
availability_zone = "us-east-1a"
backup_retention_period = "7"
backup_window = "00:05-00:35"
skip_final_snapshot = true

db_subnet_group_name = aws_db_subnet_group.DBSubnetgroup.id
vpc_security_group_ids = [aws_security_group.DBSG.id]

  provisioner "local-exec" {
    command = "echo ${aws_db_instance.RDS.address} >> /var/lib/jenkins/workspace/DrupalMultiChoice/endpoint"
}
}

output "rds_link" {
  description = "The address of the RDS Instnce"
  value = aws_db_instance.RDS.address
}

#############################################################################

resource "aws_subnet" "Privatesubnet1" {
         vpc_id = aws_vpc.MyVPC.id
         cidr_block = "10.0.1.0/24"
         availability_zone = "us-east-1c"
tags = {
        Name = "Subnets"
     }
                                         }

resource "aws_subnet" "Privatesubnet2" {
         vpc_id = aws_vpc.MyVPC.id
         cidr_block = "10.0.5.0/24"
         availability_zone = "us-east-1d"
tags = {
        Name = "Subnets"
     }
}

resource "aws_eip" "EIP" {
vpc = true
}

resource "aws_nat_gateway" "NGW"{
allocation_id = aws_eip.EIP.id
subnet_id = aws_subnet.Privatesubnet1.id

tags = {
       Name = "NatGateway"
     }
}

resource "aws_route_table_association" "privrta" {
subnet_id = aws_subnet.Privatesubnet1.id
route_table_id = aws_route_table.privrt.id

}
resource "aws_route_table" "privrt" {
vpc_id = aws_vpc.MyVPC.id

route{
cidr_block = "0.0.0.0/0"
nat_gateway_id = aws_nat_gateway.NGW.id

}
tags = {
       Name = "Privateroute"
}
}

resource "aws_db_subnet_group" "DBSubnetgroup" {
name = "rdssg"
subnet_ids = [aws_subnet.Publicsubnet1.id, aws_subnet.Publicsubnet2.id, aws_subnet.Privatesubnet1.id,aws_subnet.Privatesubnet2.id] 

tags = {
       Name = "rdssubnetgrp"
     }
}


resource "aws_security_group" "DBSG"{
vpc_id = aws_vpc.MyVPC.id
ingress {
       protocol = "tcp"
       from_port = "3306"
       to_port = "3306"
       security_groups = [aws_security_group.AppserverSG.id]
        }

egress {
      protocol = "tcp"
      from_port = "3306"
      to_port = "3306"
      security_groups = [aws_security_group.AppserverSG.id]
}
tags = {
      Name = "dbsecuritygroup"
     }
}
