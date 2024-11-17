FROM php:8.3.13-apache

RUN apt update -y && apt upgrade -y

RUN apt install -y jq net-tools net-tools gnupg2 ca-certificates libbz2-dev libcurl4-gnutls-dev vim \
                   curl software-properties-common libseccomp2 apt-transport-https unzip zip make python3-dev \
                   python3-pip autoconf automake gdb git libffi-dev zlib1g-dev libssl-dev build-essential libpcre3-dev \
                   libfreetype6-dev libicu-dev libjpeg-dev libmcrypt-dev libpq-dev  

RUN docker-php-ext-install gd mysqli pdo_mysql bz2 iconv  

# Install Composer (optionnal)
#ENV COMPOSER_HOME /root/composer 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#ENV PATH $COMPOSER_HOME/vendor/bin:$PATH

WORKDIR /var/www/html/
RUN composer require unleash/client symfony/http-client nyholm/psr7 symfony/cache
#COPY composer.json composer.lock ./
#RUN composer install 
