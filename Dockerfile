# Use PHP with Apache
FROM php:8.2-apache

# Install the mysqli extension required by your db.php
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy your project files to the container
COPY . /var/www/html/

# Ensure permissions are correct
RUN chown -R www-data:www-data /var/www/html