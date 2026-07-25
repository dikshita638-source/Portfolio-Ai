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
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    sqlite-dev \
    pkgconf

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg

RUN docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    pdo_sqlite \
    mbstring \
    bcmath \
    exif \
    gd \
    zip

# Force PHP-FPM to listen on TCP 9000 (some Alpine builds default to unix socket)
RUN echo "listen = 127.0.0.1:9000" > /usr/local/etc/php-fpm.d/zz-listen.conf

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy only what composer install needs (layer caching)
COPY composer.json composer.lock artisan ./
RUN mkdir -p bootstrap/cache

# Install Composer dependencies
RUN composer install \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --optimize-autoloader

# Copy application code
COPY . .

# Copy built frontend assets from stage 1
COPY --from=frontend /app/public/build ./public/build

# Copy Docker configs
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/entrypoint.sh /entrypoint.sh

# Create all required directories and set permissions
RUN mkdir -p storage/framework/{sessions,views,cache} \
    storage/framework/cache/data \
    storage/logs \
    storage/app/private \
    bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache \
    && chmod +x /entrypoint.sh

EXPOSE 8000

ENTRYPOINT ["/entrypoint.sh"]
