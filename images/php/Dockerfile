FROM php:8.0.3-fpm

RUN apt-get update && apt-get install -y git unzip zip libc-dev pkg-config libssl-dev
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN pecl install mongodb
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini

WORKDIR /var/www