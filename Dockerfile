FROM php:8.1-cli

# Install ekstensi database mysqli dan pdo_mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /app
COPY . .

# Set default PORT jika variabel PORT dari Railway tidak terbaca
ENV PORT=8080

# Menggunakan Shell Form (tanpa kurung siku)
CMD php -S 0.0.0.0:$PORT