FROM php:8.1-apache

# Install ekstensi database
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite untuk CodeIgniter
RUN a2enmod rewrite

# Ubah DocumentRoot ke /var/www/html
COPY . /var/www/html/

# Berikan izin akses folder
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80