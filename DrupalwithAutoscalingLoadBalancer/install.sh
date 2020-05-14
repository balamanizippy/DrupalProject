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
git clone -b sourcecode https://github.com/mohamedzoheb/DrupalProject.git
cd /home/ec2-user/drupal3
yes | cp -Rf drupal /var/www/html/
sudo systemctl restart httpd

cd /home/ec2-user
endpoint=`aws rds --region us-east-1 describe-db-instances --query "DBInstances[*].Endpoint.Address"`
echo >file $endpoint
sed -i 's/[][]//g' /home/ec2-user/file
sed -i 's/"//g' /home/ec2-user/file
sed -i 's/ //g' /home/ec2-user/file
endpoint=$(<file)
echo $endpoint

sed -i "s/localhost/$endpoint/g" /var/www/html/drupal/sites/default/settings.php
cd /home/ec2-user/drupal3
mysql -u zippyops -pzippyops -h $endpoint zippyops_db < zippyops_db.sql
sudo systemctl restart httpd


#sudo sed -i 's/#PubkeyAuthentication yes/PubkeyAuthentication yes/g' /etc/ssh/sshd_config
#sudo echo "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDlvu4zNd+Ng4K5twKW3iaxvxXXD4pZ8iehQ8h+fDoDdEQIjV6pTfmTmFdYY1Ilt54ETvpvGSZkM3aPbqBX1HEmt3sc/JF8EjdQ63L0phhGnjulLeUIGCydNANZSedTfmcQ+llbaFIrhYNiKMOwkAARj8Sb3E1Y6ZsoUCGekPkDw8s1OlJEhIudxKT3Y7SsvCuP8aWgposC4DGBbBIIq+UipqBI0l6kOFB+fp8hPDY3x4AnrpxqeAgXKpTPYGP53z3vJF25l2K4s3+53mfy+c5c2NcoGxbE0hB1E5fWyaBun9vpRwtwGYBcmH+s0dDIWxR5P+5TsgJl7eO+kSLvDdPp jenkins@jenkins-cloud.novalocal" > /home/ec2-user/.ssh/authorized_keys
#chmod 700 /home/ec2-user/.ssh
#chmod 640 /home/ec2-user/.ssh/authorized_keys
