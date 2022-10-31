FROM composer:2.4.2 as build
WORKDIR /app
COPY . /app
RUN composer install --ignore-platform-reqs && composer dumpautoload 

FROM php:8.1.0RC5-apache-buster
RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 8080
COPY --from=build /app /var/www/
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN chmod 777 -R /var/www/storage/ && \
  echo "Listen 8080">>/etc/apache2/ports.conf && \
  chown -R www-data:www-data /var/www/ && \
  a2enmod rewrite
RUN cd /var/www && \
  cp .env.example .env && \ 
  mv app.yaml app_yaml