# WSL Production Notes

The Jenkins pipeline now deploys the app to:

```text
/home/boonie/prod.kilanadevops.xyz
```

It also bootstraps these items automatically on deploy:

- `.env` from `.env.production.example` if missing
- `storage/` directories
- `public/storage` symlink
- Laravel app key
- Laravel config, route, and view caches
- production frontend assets from `npm run build`

## Manual Nginx Step

Nginx is already installed on this WSL machine, but the site config still has to be enabled manually with sudo:

```bash
sudo cp deploy/nginx/laravel-dev.conf /etc/nginx/sites-available/laravel-dev
sudo ln -sf /etc/nginx/sites-available/laravel-dev /etc/nginx/sites-enabled/laravel-dev
sudo rm -f /etc/nginx/sites-enabled/default
sudo nginx -t
sudo systemctl reload nginx
```

## Optional MySQL Setup

If this app needs a real database, update:

```text
/home/boonie/prod.kilanadevops.xyz/.env
```

Then create the database and user:

```bash
sudo mysql -e "CREATE DATABASE laravel_app CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
sudo mysql -e "CREATE USER 'laravel_user'@'127.0.0.1' IDENTIFIED BY 'change_me';"
sudo mysql -e "GRANT ALL PRIVILEGES ON laravel_app.* TO 'laravel_user'@'127.0.0.1'; FLUSH PRIVILEGES;"
```

Run migrations after that:

```bash
cd /home/boonie/prod.kilanadevops.xyz
/home/boonie/.local/bin/php artisan migrate --force
```
