#!/bin/sh
set -e

cd /var/www/html

# Create .env from example if it doesn't exist
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Write Render environment variables into .env so config:cache picks them up
# APP_KEY: use Render's value if provided, otherwise generate one
if [ -n "$APP_KEY" ]; then
    sed -i "s|^APP_KEY=.*|APP_KEY=$APP_KEY|" .env
else
    php artisan key:generate --force
fi

# Overlay all Render env vars into .env for config:cache
for var in APP_NAME APP_ENV APP_DEBUG APP_URL DB_CONNECTION CACHE_STORE SESSION_DRIVER QUEUE_CONNECTION; do
    eval val=\$$var
    if [ -n "$val" ]; then
        sed -i "s|^${var}=.*|${var}=${val}|" .env || echo "${var}=${val}" >> .env
    fi
done

# Set correct permissions BEFORE running artisan commands
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Run Laravel optimizations
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Ensure correct permissions after cache generation
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Start services
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
