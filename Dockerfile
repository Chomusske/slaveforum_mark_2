FROM php:8.1-fpm

# Установите зависимости
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    zip git unzip

# Установите расширения PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo pdo_mysql gd

WORKDIR /var/www/html
COPY . /var/www/html/

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
