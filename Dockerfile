FROM wordpress:5.8.1-apache

COPY ./wp-content /var/www/html/wp-content

EXPOSE 8080