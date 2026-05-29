#!/usr/bin/env bash
set -euo pipefail

APP_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$APP_DIR"

mkdir -p storage/app/public/events storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache database

if [ ! -f .env ]; then
    cp .env.example .env
fi

touch database/database.sqlite

composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction

if ! grep -q '^APP_KEY=base64:' .env; then
    php artisan key:generate --force
fi

php artisan migrate --force
php artisan storage:link || true
php artisan config:cache
php artisan route:cache
php artisan view:cache

if command -v sudo >/dev/null 2>&1; then
    sudo chown -R "$USER":www-data storage bootstrap/cache database/database.sqlite
    sudo chmod -R ug+rw storage bootstrap/cache database/database.sqlite
fi
