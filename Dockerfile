FROM php:8.1-cli

# Install ekstensi database mysqli dan pdo_mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /app
COPY . .

# Buat script pembuka agar variabel PORT dievaluasi dengan benar oleh Shell Linux
RUN echo '#!/bin/sh\nexec php -S 0.0.0.0:${PORT:-8080}' > /entrypoint.sh \
    && chmod +x /entrypoint.sh

EXPOSE 8080

ENTRYPOINT ["/entrypoint.sh"]