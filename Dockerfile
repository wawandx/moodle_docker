FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libzip-dev zip unzip git curl \
    libicu-dev libxml2-dev \
    libonig-dev \
    libxslt1-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        gd mysqli pdo pdo_mysql zip intl opcache \
        soap exif

RUN a2enmod rewrite

RUN echo "memory_limit=512M" >> /usr/local/etc/php/conf.d/moodle.ini \
 && echo "max_execution_time=300" >> /usr/local/etc/php/conf.d/moodle.ini \
 && echo "max_input_vars=5000" >> /usr/local/etc/php/conf.d/moodle.ini \
 && echo "opcache.enable=1" >> /usr/local/etc/php/conf.d/moodle.ini \
 && echo "opcache.memory_consumption=256" >> /usr/local/etc/php/conf.d/moodle.ini \
 && echo "opcache.max_accelerated_files=20000" >> /usr/local/etc/php/conf.d/moodle.ini \
 && echo "opcache.revalidate_freq=60" >> /usr/local/etc/php/conf.d/moodle.ini \
 && echo "zend.exception_ignore_args=On" >> /usr/local/etc/php/conf.d/moodle.ini

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN echo '<Directory /var/www/html/public>\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' >> /etc/apache2/apache2.conf

WORKDIR /var/www/html
