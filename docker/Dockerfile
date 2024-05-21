################################ PHP Dependencies ################################
FROM php:8.2-fpm-alpine

WORKDIR /var/www

# Install alpine packages
RUN apk add --no-cache --update \
    libzip-dev \
    libxml2-dev \
    libpng-dev \
    jpeg-dev \
    freetype-dev \
    libjpeg-turbo \
    libwebp \
    libmcrypt-dev \
    autoconf \
    g++ \
    gcc \
    linux-headers \
    make


RUN apk update -q \
    && apk add --no-cache bash zip gd libzip-dev postgresql-dev libpng-dev libwebp-dev libjpeg-turbo-dev freetype-dev\
    && apk add --no-cache $PHPIZE_DEPS

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp

# Install php extensions
RUN docker-php-ext-install \
    pgsql \
    pdo \
    pdo_pgsql \
    zip \
    xml \
    gd \
    exif


# Install xdebug

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug


# Install composer dependencies
COPY --chown=www-data:www-data .env /var/www/.env

# Install composer and install packages
COPY --chown=www-data:www-data ./composer.lock ./composer.json /var/www/
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-scripts --no-autoloader
# Copy existing application directory contents
COPY --chown=www-data:www-data . .

RUN composer dumpautoload -o
RUN composer run-script post-autoload-dump

USER www-data



