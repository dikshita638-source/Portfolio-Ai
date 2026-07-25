# ============================================
# Stage 1: Build frontend assets
# ============================================
FROM node:20-alpine AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm ci

COPY . .

RUN npm run build


# ============================================
# Stage 2: Production
# ============================================
FROM php:8.2-fpm-alpine

# Install system packages
RUN apk add --no-cache \
    nginx \
    supervisor \
    git \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    pkgconf

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg

RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    bcmath \
    exif \
    gd \
    zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy the whole Laravel project
COPY . .

# Install Composer dependencies
RUN composer install \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --optimize-autoloader

# Copy built frontend assets
COPY --from=frontend /app/public/build ./public/build

# Copy Docker configs
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

# Laravel permissions
RUN mkdir -p storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 8000

ENTRYPOINT ["/entrypoint.sh"]