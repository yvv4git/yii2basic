FROM php:7.0.10-fpm-alpine

RUN docker-php-source extract && \
  apk add --update --no-cache autoconf g++ make && \
  pecl install redis && \
  docker-php-ext-enable redis && \
  docker-php-ext-install mysqli && \
  docker-php-ext-install pdo && \
  docker-php-ext-install pdo_mysql && \
  docker-php-ext-install mbstring && \
  docker-php-ext-install tokenizer && \
  docker-php-source delete

RUN rm -rf /var/cache/apk/*

#FROM php:7.4-fpm

# Install selected extensions and other stuff
#RUN apt-get update && apt-get install -y \
#        libfreetype6-dev \
#        libjpeg62-turbo-dev \
#        libpng-dev \
#    && docker-php-ext-configure gd --with-freetype --with-jpeg \
#    && docker-php-ext-install -j$(nproc) gd

# apt install libzip-dev zip
# docker-php-ext-configure zip --with-libzip
# docker-php-ext-install zip

#pdo_pgsql
#RUN docker-php-ext-install pdo pdo_mysql

#RUN apt install -y git

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN chmod 777 -R /var/www/dy2/runtime/
#RUN chmod 777 -R /var/www/dy2/web/assets/

WORKDIR "/var/www/dy2"
