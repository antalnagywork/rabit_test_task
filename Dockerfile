FROM php:7.4-apache

# Install PDO and PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

COPY ./apache-config.conf /etc/apache2/sites-available/000-default.conf

# Set file permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 777 /var/www/html/

# Enable Apache rewrite module
RUN a2enmod rewrite