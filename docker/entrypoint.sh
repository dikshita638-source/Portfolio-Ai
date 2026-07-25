#!/bin/sh
set -e

cd /var/www/html

# Create .env from example if it doesn't exist
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Generate APP_KEY if not set
php artisan key:generate --force

# Run Laravel optimizations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Ensure correct permissions
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Start services
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
