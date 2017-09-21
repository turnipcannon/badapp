FROM ubuntu:16.04
MAINTAINER Andrew Turnsek <andrew@turnsekurity.com>
LABEL Description="Ubuntu 16.04 with LAMP stack, running an intentionally vulnerable web application. Use with caution! Based off of fauria's LAMP with PHP7" \
	License="Apache License 2.0" \
	Usage="docker run -d -p 8080:80 badapp" \
	Version="1.0"
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y apache2 mariadb-common mariadb-server mariadb-client php7.0 php7.0-mysql libapache2-mod-php7.0 git bash
COPY ./html /var/www/html/
COPY ./badapp.sql /tmp/badapp.sql
RUN service apache2 start
RUN /bin/bash -c "/usr/bin/mysqld_safe &" && \
  sleep 5 && \
  mysql -u root < /tmp/badapp.sql
EXPOSE 80
