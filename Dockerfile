FROM php:apache

RUN docker-php-ext-install mysql

COPY . /var/www/html/