FROM php:8.2-fpm

RUN mkdir -p /var/www/html/public
RUN mkdir -p /var/www/opcache

RUN apt-get update && apt-get install -y bash

RUN docker-php-ext-install pdo pdo_mysql opcache

ARG USERID
ARG GROUPID

ENV USERID=${USERID}
ENV GROUPID=${GROUPID}

ENV PHPUSER=laravel
ENV PHPGROUP=laravel

RUN groupadd -f -g ${GROUPID} --system ${PHPGROUP}
RUN useradd  -u ${USERID} -g ${PHPGROUP} --system -p "*" ${PHPUSER}

RUN sed -i "s/user = www-data/user = ${PHPUSER}/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i "s/group = www-data/group = ${PHPGROUP}/g" /usr/local/etc/php-fpm.d/www.conf

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]

