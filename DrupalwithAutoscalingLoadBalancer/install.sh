#!/bin/bash
if [ "$(whoami)" != "root" ]
then
    sudo su -s "$0"
    exit
fi 
sleep 5
sudo yum update -y
sudo amazon-linux-extras install epel -y

sudo yum install git -y
sudo yum install httpd -y
sudo systemctl start httpd && sudo systemctl enable httpd

sudo rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm 
sudo rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm
sudo yum install php70w php70w-opcache php70w-mbstring php70w-gd php70w-xml php70w-pear php70w-fpm php70w-mysql php70w-pdo -y
sudo sed -i "/^<Directory \"\/var\/www\/html\">/,/^<\/Directory>/{s/AllowOverride None/AllowOverride All/g}" /etc/httpd/conf/httpd.conf

sudo yum -y install mariadb-server
sudo systemctl start mariadb && sudo systemctl enable mariadb
sleep 5

cd /var/www/html/
sudo yum install drush -y
sudo drush dl drupal-8
cd /var/www/html/drupal-8.8.5/sites/default/
sudo cp default.settings.php settings.php
sudo chown -R apache:apache /var/www/html/drupal-8.8.5/
sudo setenforce 0
cd /var/www/html/
sudo mv drupal-8.8.5 drupal
sleep 5
cd /home/ec2-user
git clone -b sourcecode https://github.com/1996karthick/DrupalProject.git
cd /home/ec2-user/DrupalProject
yes | cp -Rf drupal /var/www/html/
sleep 5
sudo systemctl restart httpd

cd /home/ec2-user
endpoint=`aws rds --region us-west-2 describe-db-instances --query "DBInstances[*].Endpoint.Address"`
echo >file $endpoint
sed -i 's/[][]//g' /home/ec2-user/file
sed -i 's/"//g' /home/ec2-user/file
sed -i 's/ //g' /home/ec2-user/file
endpoint=$(<file)
echo $endpoint
sleep 5
sed -i "s/localhost/$endpoint/g" /var/www/html/drupal/sites/default/settings.php
cd /home/ec2-user/DrupalProject
mysql -u zippyops -pzippyops -h $endpoint zippyops_db < zippyops_db.sql
sleep 5
sudo systemctl restart httpd



