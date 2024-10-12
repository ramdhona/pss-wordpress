FROM php:8.2-apache

WORKDIR /var/www/html

# Instal ekstensi PHP yang diperlukan
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd mysqli && \
    pecl install redis && \
    docker-php-ext-enable redis && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

EXPOSE 80

CMD ["apache2-foreground"]
