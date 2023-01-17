FROM debian:buster
RUN  apt-get  update 
RUN apt install -y nginx
COPY nginx.conf /etc/nginx/nginx.conf
EXPOSE 443
RUN mkdir /etc/nginx/ssl
WORKDIR /etc/nginx/ssl
RUN apt-get update && apt-get install -y openssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:4096  -keyout private.key -out certificate.crt -subj "/C=US/ST=CA/L=San Francisco/O=Your Company, Inc./OU=IT/CN=localhost"
CMD ["nginx","-g", "daemon off;"]