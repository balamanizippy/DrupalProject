#### VPC ####
resource "aws_vpc" "vpc_name" {
  cidr_block = var.vpc_cidr
  enable_dns_support = true
  enable_dns_hostnames = true
  tags = {
    Name = "MyVPC"
  }
}

#### Subnet ####

resource "aws_subnet" "public_subnet" {
  vpc_id                  = aws_vpc.vpc_name.id
  cidr_block              = var.public_cidr
  map_public_ip_on_launch = true
  availability_zone = var.subnet_zone
  tags = {
    Name = "public subnet"
  }
}

#### Route table ####

resource "aws_route_table" "public_route_table" {
  vpc_id = aws_vpc.vpc_name.id
  tags = {
    Name = "public route table"
  }
}

resource "aws_route" "public_route" {
  route_table_id  = aws_route_table.public_route_table.id
  destination_cidr_block = "0.0.0.0/0"
  gateway_id = aws_internet_gateway.gw.id
}

resource "aws_route_table_association" "public_subnet_association" {
   subnet_id = aws_subnet.public_subnet.id
   route_table_id = aws_route_table.public_route_table.id
}

###### Internet Gateway #####

resource "aws_internet_gateway" "gw" {
 vpc_id = aws_vpc.vpc_name.id
 tags = {
    Name = "InternetGateway"
 }
}

resource "aws_route" "internet_access" {
 route_table_id         = aws_vpc.vpc_name.main_route_table_id
 destination_cidr_block = "0.0.0.0/0"
 gateway_id             = aws_internet_gateway.gw.id
}

