variable "active_key" {
    default = "user"
}
variable "security_key" {
    default = "password"
}
variable "aws_region" {
    default = "us-west-2"
}
variable "image" {
    description = "instance images"
    default     = "ami-0d6621c01e8c2de2c"
}
variable "instance_type" {
    description = "instance type"
    default     = "t2.micro"
}
variable "key" {
    description = "instance key name"
    default     = "drupaloregon"
}
variable "size" {
    description = "instance size"
    default     = "10"
}
variable "minValue" {
    description = "autoscaling minimum value"
    default     = "1"
}
variable "maxValue" {
    description = "autoscaling maximum value"
    default     = "2"
}
