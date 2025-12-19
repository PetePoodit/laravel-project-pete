FROM php:8.5-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer global require laravel/installer

ENV PATH="/root/.composer/vendor/bin:${PATH}"

WORKDIR /app

ENTRYPOINT ["laravel", "new"]

