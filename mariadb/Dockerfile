FROM debian:buster
# Install MariaDB and dependencies
RUN apt-get update && apt-get install -y mariadb-server
# Configure MariaDB
COPY ./my.cnf /etc/mysql/mariadb.conf.d/
COPY ./create_database.sh /
CMD ["/create_database.sh"]
