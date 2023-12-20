FROM php:8.2-fpm

RUN mkdir -p /var/www/html/public
RUN mkdir -p /var/www/opcache

RUN apt-get update && apt-get install -y bash

RUN docker-php-ext-install pdo pdo_mysql opcache

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]

