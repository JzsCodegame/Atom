FROM php:8.2-apache

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli

COPY actions.php alerts.php datepicker.php footer.php guide.php header.php index.php login.php signup.php tables.php upload.php visual.php windows.php windows_child1.php windows_child2.php /var/www/html/
COPY automation_playground.css /var/www/html/
COPY includes/ Css/ img/ /var/www/html/
COPY docker/start.sh /usr/local/bin/start.sh

RUN chmod +x /usr/local/bin/start.sh

EXPOSE 10000

CMD ["start.sh"]
