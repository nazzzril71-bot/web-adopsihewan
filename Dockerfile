FROM php:8.1-cli

# Install ekstensi database mysqli dan pdo_mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /app
COPY . .

# Jalankan PHP server di port yang diberikan Railway secara dinamis
CMD php -S 0.0.0.0:$PORT