FROM php:7.4-fpm

RUN apt-get update && apt install -y apt-utils

# Install selected extensions and other stuff
RUN apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        vim \
        git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

# Install ext-zip
RUN apt install -y libzip-dev zip && \
#  docker-php-ext-configure zip --with-libzip && \
  docker-php-ext-install zip


# Install pdo
#pdo_pgsql
RUN docker-php-ext-install pdo pdo_mysql

#RUN apt install -y git

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#RUN chmod 777 -R /var/www/dy2/runtime/
#RUN chmod 777 -R /var/www/dy2/web/assets/

WORKDIR "/var/www/dy2"
