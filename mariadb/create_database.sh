#!/bin/bash



service mysql start 


echo "CREATE DATABASE IF NOT EXISTS mariadb ;" > db1.sql
echo "CREATE USER IF NOT EXISTS 'orbiay'@'%' IDENTIFIED BY 'root' ;" >> db1.sql
echo "GRANT ALL PRIVILEGES ON mariadb.* TO 'orbiay'@'%' ;" >> db1.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY 'root' ;" >> db1.sql
echo "FLUSH PRIVILEGES;" >> db1.sql

mysql < db1.sql


kill $(cat /var/run/mysqld/mysqld.pid)
mysqld