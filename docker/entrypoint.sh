#!/bin/sh
set -e

cd /var/www/html

# Generate APP_KEY if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Run Laravel optimizations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Ensure correct permissions
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Start services
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
