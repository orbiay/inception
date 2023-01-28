FROM debian:buster
RUN  apt-get  update
RUN  apt-get install curl unzip -y
RUN apt-get update && apt-get -y install php7.3-fpm php7.3-common php7.3-curl php7.3-json php7.3-mbstring php7.3-mysql php7.3-xml php7.3-zip && mkdir -p /run/php
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
#  Move the file to a directory that's in your PATH, so the wp command is available globally
COPY ./setting.sh ./
RUN chmod +x ./setting.sh
COPY ./wp-config.php /
CMD ["./setting.sh"]