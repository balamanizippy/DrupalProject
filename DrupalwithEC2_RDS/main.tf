resource "aws_vpc" "tfvpc" {
         cidr_block = "10.0.0.0/16"
enable_dns_hostnames = "true"
tags =  {
         Name = "Terraform"
     }
                             }

resource "aws_subnet" "tfpublicsubnet" {
        vpc_id = aws_vpc.tfvpc.id
        cidr_block = "10.0.0.0/24"
        availability_zone = "us-east-1a"
tags = {
        Name = "TerraformSubnets"
     }
                                  }

#############################################################################
resource "aws_instance" "FirsttfInstance" {
ami = var.image
instance_type = var.instance_type
subnet_id = aws_subnet.tfpublicsubnet.id
private_ip = var.privateec2_ip
key_name = var.key
user_data = data.template_file.FirsttfInstance.rendered
get_password_data = "false"
availability_zone = "us-east-1a"
security_groups = [aws_security_group.tfsecuritygroup.id]
associate_public_ip_address = true
root_block_device {
       volume_type           = "gp2"
       volume_size           = var.size
       delete_on_termination = "true"
}
tags =  {
       Name = "TerraformInstance"
     }
provisioner "local-exec" {
    command = "echo ${aws_instance.FirsttfInstance.public_ip} >> /var/lib/jenkins/workspace/Drupalmulti/publicip"
}
}
data "template_file" "FirsttfInstance" {
  template = file("install.sh")
}
##################################################################################

resource "aws_internet_gateway" "tfgw"{
vpc_id = aws_vpc.tfvpc.id

tags = {
       Name = "tfgateway"
     }
}
resource "aws_route_table_association" "tf" {
subnet_id = aws_subnet.tfpublicsubnet.id
route_table_id = aws_route_table.tf.id
}
resource "aws_route_table" "tf" {
vpc_id = aws_vpc.tfvpc.id

route{
cidr_block = "0.0.0.0/0"
gateway_id = aws_internet_gateway.tfgw.id
}

tags = {
       Name = "Publicroute"

}
}

###############################################################################
resource "aws_security_group" "tfsecuritygroup" {
vpc_id = aws_vpc.tfvpc.id
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
       Name = "tfsecuritygroup"
     }

}

resource "aws_db_instance" "tfrds" {
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

db_subnet_group_name = aws_db_subnet_group.tfdbsubnetgroup.id
vpc_security_group_ids = [aws_security_group.dbsg.id]

  provisioner "local-exec" {
    command = "echo ${aws_db_instance.tfrds.address} >> /var/lib/jenkins/workspace/Drupalmulti/endpoint"
}
}

output "rds_link" {
  description = "The address of the RDS Instnce"
  value = aws_db_instance.tfrds.address
}

#############################################################################

resource "aws_eip" "nat" {
vpc = true
}

resource "aws_subnet" "tfprivatesubnet" {
         vpc_id = aws_vpc.tfvpc.id
         cidr_block = "10.0.1.0/24"
         availability_zone = "us-east-1b"
tags = {
        Name = "TerraformSubnets"
     }
                                         }

resource "aws_subnet" "tfpublicsubnet2" {
         vpc_id = aws_vpc.tfvpc.id
         cidr_block = "10.0.2.0/24"
         availability_zone = "us-east-1c"
tags = {
        Name = "TerraformSubnets"
     }
}

resource "aws_db_subnet_group" "tfdbsubnetgroup" {
name = "rdssg"
subnet_ids = [aws_subnet.tfprivatesubnet.id, aws_subnet.tfpublicsubnet.id, aws_subnet.tfpublicsubnet2.id] 

tags = {
       Name = "rdssubnetgrp"
     }
}

resource "aws_nat_gateway" "ngw"{
allocation_id = aws_eip.nat.id
subnet_id = aws_subnet.tfprivatesubnet.id

tags = {
       Name = "NatGatewaytf"
     }
}
resource "aws_route_table_association" "tfprivate" {
subnet_id = aws_subnet.tfprivatesubnet.id
route_table_id = aws_route_table.tfprivate.id

}
resource "aws_route_table" "tfprivate" {
vpc_id = aws_vpc.tfvpc.id

route{
cidr_block = "0.0.0.0/0"
nat_gateway_id = aws_nat_gateway.ngw.id

}
tags = {
       Name = "Privateroute"
}
}


resource "aws_security_group" "dbsg"{
vpc_id = aws_vpc.tfvpc.id
ingress {
       protocol = "tcp"
       from_port = "3306"
       to_port = "3306"
       security_groups = [aws_security_group.tfsecuritygroup.id]
        }

egress {
      protocol = "tcp"
      from_port = "3306"
      to_port = "3306"
      security_groups = [aws_security_group.tfsecuritygroup.id]
}
tags = {
      Name = "dbsecuritygroup"
     }
}

