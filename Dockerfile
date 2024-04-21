
FROM php:8.3-apache



RUN apt-get update -qq && \
    apt-get install -qy \
    git \
    gnupg \
    unzip \
    zip npm && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# PHP Extensions
RUN docker-php-ext-install -j$(nproc) opcache pdo_mysql

RUN a2enmod rewrite



RUN npm install -g n && n lts
    
    
ADD conf/custom.ini /usr/local/etc/php/conf.d/custom.ini

COPY ./conf/findthebeat.conf /etc/apache2/sites-available/findthebeat.conf


    
    # Add custom.ini to overwrite php.ini for configure PHP
    
    
    # ADD conf/php/custom.ini /usr/local/etc/php/conf.d/custom.ini

ENV COMPOSER_ALLOW_SUPERUSER=1
    
    
    
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
    
WORKDIR /var/www/findthebeat/

RUN chmod -R 775 .

COPY app/.env app/public app/assets app/bin app/config app/src app/templates app/package.json  app/composer.json  ./
    
RUN composer update && composer install
RUN npm update && npm install --force && npm run build


RUN a2ensite findthebeat
RUN a2dissite 000-default

EXPOSE 80


