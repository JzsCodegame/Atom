FROM php:8.2-apache

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli

COPY *.php /var/www/html/
COPY automation_playground.css /var/www/html/
COPY includes/ Css/ img/ /var/www/html/
COPY docker/start.sh /usr/local/bin/start.sh

RUN chmod +x /usr/local/bin/start.sh

EXPOSE 10000

CMD ["start.sh"]
