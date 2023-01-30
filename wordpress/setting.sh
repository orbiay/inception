#!/bin/bash
mkdir -p /var/www/wordpress
cd /var/www/wordpress
rm -rf *
#sed -i "s|listen = /run/php/php7.3-fpm.sock|listen = 0.0.0.0|" /etc/php/7.3/fpm/pool.d/www.conf

# Download WordPress
wp core download --allow-root
cp wp-config-sample.php wp-config.php
#mv /wp-config.php wp-config.php
# Create a new WordPress config file

# Install WordPress site
#wp core install --url="localhost.com" --title="your_site_title" --admin_user="oussama" --admin_password="orbiay" --admin_email="oussamarabi3i02@gmail.com" --allow-root

sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/g' /etc/php/7.3/fpm/pool.d/www.conf
cd /var/www/wordpress

sed -i "s/database_name_here/$DB_NAME/g" wp-config.php
sed -i "s/username_here/$USER_NAME/g" wp-config.php
sed -i "s/password_here/$DB_PASS/g" wp-config.php
sed -i "s/localhost/$DB_HOST/g" wp-config.php

wp core install --url=localhost --title=YourBlogTitle --admin_name=oussama --admin_password=orbiay --admin_email=oussamarabi3i02@gmail.com --allow-root
wp user create user oussamarabi3i00@gmail.com --role=author --user_pass=orbiay --allow-root


/usr/sbin/php-fpm7.3 -F