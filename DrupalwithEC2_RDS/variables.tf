variable "active_key" {
    default = "user"
}
variable "security_key" {
    default = "password"
}
variable "aws_region" {
    default = "us-east-1"
}
variable "privateec2_ip" {
    default = "10.0.0.5"
}
variable "image" {
    description = "instance images"
    default     = "ami-0323c3dd2da7fb37d"
}
variable "instance_type" {
    description = "instance type"
    default     = "t2.micro"
}
variable "key" {
    description = "instance key name"
    default     = "drupalzoka"
}
variable "size" {
    description = "instance size"
    default     = "10"
}
