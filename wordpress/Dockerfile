FROM debian:buster
RUN  apt-get  update
RUN  apt-get install curl unzip -y
RUN apt-get update && apt-get -y install php7.3-fpm php7.3-mbstring php7.3-mysql php7.3-phar && mkdir -p /run/php
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
#  Move the file to a directory that's in your PATH, so the wp command is available globally
COPY ./setting.sh ./
RUN chmod +x ./setting.sh
CMD ["./setting.sh"]