
FROM php:8-fpm




# Install php && ext

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        zip unzip \
        zlib1g-dev libicu-dev g++ npm \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install intl \
    && docker-php-ext-install opcache



RUN npm install -g n && n lts
    
    
    
    
    # Add custom.ini to overwrite php.ini for configure PHP
    
    
    # ADD conf/php/custom.ini /usr/local/etc/php/conf.d/custom.ini
    
    
    
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
    
WORKDIR /var/www/findthebeat
ADD public src assets bin config src templates package.json package-lock.json composer.json ./
    
RUN npm update && npm install --force && npm run build

RUN composer update && composer install