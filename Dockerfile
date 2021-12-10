FROM php:8.0-apache

# Install MySQLi, PDO & PDO_MYSQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

#Update packages
RUN apt-get update && apt-get upgrade -y

#Enable rewrite
RUN a2enmod rewrite

#Remove the following error: apache2: Could not reliably determine the server's fully qualified domain name, using 172.19.0.4. Set the 'ServerName' directive globally to suppress this message
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

#Enable PHP init Custom Config
COPY php.ini /usr/local/etc/php/

#Restart service
RUN service apache2 restart