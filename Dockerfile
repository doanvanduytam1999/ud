FROM wordpress:5.8.1-apache

COPY ./wp-content /var/www/html/wp-content

COPY entrypoint-child.sh /usr/bin/
RUN chmod +x /usr/bin/entrypoint-child.sh

EXPOSE 8080

ENTRYPOINT ["entrypoint-child.sh"]

CMD ["apache2-foreground"]

