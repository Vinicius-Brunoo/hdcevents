#!/usr/bin/env bash
set -euo pipefail

APP_DIR="${APP_DIR:-/var/www/hdcevents}"
PHP_VERSION="${PHP_VERSION:-8.3}"

sudo apt update
sudo apt install -y \
    nginx \
    git \
    unzip \
    curl \
    rsync \
    sqlite3 \
    "php${PHP_VERSION}-fpm" \
    "php${PHP_VERSION}-cli" \
    "php${PHP_VERSION}-common" \
    "php${PHP_VERSION}-mbstring" \
    "php${PHP_VERSION}-xml" \
    "php${PHP_VERSION}-curl" \
    "php${PHP_VERSION}-zip" \
    "php${PHP_VERSION}-sqlite3" \
    "php${PHP_VERSION}-bcmath"

if ! command -v composer >/dev/null 2>&1; then
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
    sudo mv composer.phar /usr/local/bin/composer
fi

if ! command -v node >/dev/null 2>&1; then
    curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
    sudo apt install -y nodejs
fi

sudo mkdir -p "$APP_DIR"
sudo chown -R "$USER":www-data "$APP_DIR"
sudo chmod -R 775 "$APP_DIR"

echo "EC2 pronto. Configure o Nginx usando deploy/nginx-hdcevents.conf e aponte para ${APP_DIR}/public."
