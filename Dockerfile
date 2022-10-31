FROM composer:2.4.1 as build
WORKDIR /app
COPY . /app
RUN composer install --ignore-platform-reqs && composer dumpautoload

FROM php:8.1.0alpha3-fpm-alpine
RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update && apt-get install -qy ssh unzip autoconf libz-dev git
RUN yes | pecl install grpc-1.26.0
RUN install-php-extensions grpc
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
EXPOSE 8080
COPY --from=build /app /var/www/
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN chmod 777 -R /var/www/storage/ && \
  echo "Listen 8080">>/etc/apache2/ports.conf && \
  chown -R www-data:www-data /var/www/ && \
  a2enmod rewrite