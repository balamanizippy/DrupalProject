#!/bin/bash
if [ "$(whoami)" != "root" ]
then
    sudo su -s "$0"
    exit
fi 
sudo yum update -y
sudo amazon-linux-extras install epel -y
sudo yum install git -y
sudo yum -y install mariadb-server
sudo systemctl start mariadb && sudo systemctl enable mariadb
sudo echo "CREATE DATABASE zippyops_db CHARACTER SET utf8 COLLATE utf8_general_ci;;" | mysql
sudo echo "CREATE USER zippyops@10.0.0.11 IDENTIFIED BY 'zippyops';" | mysql
sudo echo "GRANT ALL PRIVILEGES ON zippyops_db.* TO 'zippyops'@'10.0.0.11';" | mysql
sudo echo "FLUSH PRIVILEGES;" | mysql
sudo systemctl restart mariadb








