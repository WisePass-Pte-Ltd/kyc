## Install Apache

To install apache run the following command

sudo apt-get install apache2

To check the apache version run the following command

apache2 -v

## Install PHP

If you want to deploy your application based on the LAMP stack, usually, you can install the below packages after installing Apache

sudo apt-get install -y apache2 sudo apt-get install -y php7.0 libapache2-mod-php7.0 php7.0-cli php7.0-common php7.0-mbstring php7.0-gd php7.0-intl php7.0-xml php7.0-mysql php7.0-mcrypt php7.0-zip

Alternatively, if you want to deploy your application based on the LEMP stack, you can install the following packages after installing Nginx:

sudo apt-get install -y nginx sudo apt-get install -y php7.0 php7.0-fpm php7.0-cli php7.0-common php7.0-mbstring php7.0-gd php7.0-intl php7.0-xml php7.0-mysql php7.0-mcrypt php7.0-zip

After the installation, you can confirm that with: php -v

Restart Server

To restart the server run the following command sudo /etc/init.d/apache2 restart

## Install MysqlDB

To install mysql run the following command

sudo add-apt-repository -y ppa:ondrej/mysql-5.6 sudo apt-get update sudo apt-get install mysql-server-5.6

To check the version of mysql run the following command mysql --version

## Install Redis

Run the following commands to install redis

sudo apt-get install redis-server sudo apt-get install php-redis

To check the redis version run the following command redis-server --version

## Update config.php

After creating the database, DB configuration and other details in the config.php file inside config folder.

Now run the init.php inside config folder
(http://localhost/kyc/config/init.php)

The application should be running now.

## to add admin account
http://localhost/kyc/config/addAdmin.php
email = "admin@admin.com";
pass = "admin";

## to go live/production
Replace all "http://localhost/kyc" -> ex: "http://kyc.wisepass.co"
