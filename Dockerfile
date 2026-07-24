FROM php:8.1-cli

# Install ekstensi database mysqli dan pdo_mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /app
COPY . .

# Menggunakan sh -c agar variabel $PORT terbaca dengan benar oleh Railway
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-8080}"]