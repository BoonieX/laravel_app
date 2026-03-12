#!/usr/bin/env sh
set -eu

APP_DIR="${1:-$HOME/prod.kilanadevops.xyz}"
PHP_BIN="${PHP_BIN:-$HOME/.local/bin/php}"

if [ ! -x "$PHP_BIN" ]; then
    PHP_BIN="php"
fi

cd "$APP_DIR"

if [ ! -f .env ]; then
    if [ -f .env.production.example ]; then
        cp .env.production.example .env
    elif [ -f .env.example ]; then
        cp .env.example .env
    else
        echo "No environment template found." >&2
        exit 1
    fi
fi

mkdir -p \
    storage/app/public \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/testing \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

# Allow nginx/php-fpm to traverse and write inside the deployed app on WSL.
chmod o+x "$HOME"
chmod -R 777 storage bootstrap/cache

if ! grep -q '^APP_KEY=base64:' .env; then
    "$PHP_BIN" artisan key:generate --force
fi

"$PHP_BIN" artisan storage:link || true
"$PHP_BIN" artisan optimize:clear
"$PHP_BIN" artisan config:cache
"$PHP_BIN" artisan route:cache
"$PHP_BIN" artisan view:cache
