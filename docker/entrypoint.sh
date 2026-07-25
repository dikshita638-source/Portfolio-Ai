#!/bin/sh
set -e

cd /var/www/html

echo "--- Starting Laravel application ---"

# Create .env from example if it doesn't exist
if [ ! -f .env ]; then
    cp .env.example .env
    echo "[entrypoint] Created .env from .env.example"
fi

# APP_KEY: use Render's value if provided, otherwise generate one
if [ -n "$APP_KEY" ]; then
    sed -i "s|^APP_KEY=.*|APP_KEY=${APP_KEY}|" .env
    echo "[entrypoint] Set APP_KEY from environment"
else
    php artisan key:generate --force
    echo "[entrypoint] Generated new APP_KEY"
fi

# Overlay all Render environment variables into .env
for var in APP_NAME APP_ENV APP_DEBUG APP_URL DB_CONNECTION CACHE_STORE SESSION_DRIVER QUEUE_CONNECTION LOG_CHANNEL; do
    eval val=\$$var
    if [ -n "$val" ]; then
        sed -i "s|^${var}=.*|${var}=${val}|" .env 2>/dev/null || echo "${var}=${val}" >> .env
    fi
done

echo "[entrypoint] Environment prepared"

# Set permissions BEFORE artisan commands
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Run Laravel optimizations with error reporting
echo "[entrypoint] Running config:cache..."
php artisan config:cache 2>&1

echo "[entrypoint] Running route:cache..."
php artisan route:cache 2>&1

echo "[entrypoint] Running view:cache..."
php artisan view:cache 2>&1

echo "[entrypoint] Optimization complete"

# Ensure correct permissions after cache generation
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

echo "[entrypoint] Starting services..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
