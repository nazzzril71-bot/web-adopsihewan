FROM php:8.1-apache

# Install ekstensi database
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable URL rewrite untuk CodeIgniter
RUN a2enmod rewrite

# Copy seluruh file project ke folder Apache
COPY . /var/www/html/

# Atur hak akses folder
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

# Jalankan Apache menggunakan skrip resmi PHP Docker
CMD ["apache2-foreground"]