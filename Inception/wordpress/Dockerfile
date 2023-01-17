FROM debian:buster
RUN  apt-get  update
EXPOSE 9000
RUN  apt-get install curl -y && apt-get install unzip
RUN apt-get update && apt-get -y install php7.3-fpm php7.3-common php7.3-curl php7.3-json php7.3-mbstring php7.3-mysql php7.3-xml php7.3-zip && mkdir -p /run/php
RUN curl https://wordpress.org/latest.tar.gz -o wordpress.tar.gz
RUN tar -zxf wordpress.tar.gz  -C .
COPY ./www.config    /etc/php/7.3/fpm/php-fpm.conf
COPY ./wp-config.php ./wordpress/wp-config.php 
RUN mkdir -p /var/www/wordpress
RUN cp -a wordpress/. /var/www/wordpress
RUN rm wordpress.tar.gz
CMD ["php-fpm7.3", "--nodaemonize"]