FROM wordpress:5.8.1-php7.4-apache

COPY ./wp-content /var/www/html/wp-content
COPY ./config/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

COPY entrypoint-child.sh /usr/bin/
RUN chmod +x /usr/bin/entrypoint-child.sh

EXPOSE 8080

ENTRYPOINT ["entrypoint-child.sh"]

CMD ["apache2-foreground"]

