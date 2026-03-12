# Laravel Website
1
This directory is a plain Laravel website project.

Run the app directly with PHP, Composer, and Node.js.

## Requirements

- PHP 8.4 or newer
- Composer
- Node.js and npm

## Setup

1. Install PHP dependencies:

```bash
composer install
```

2. Create the environment file if needed:

```bash
cp .env.example .env
```

3. Generate the application key:

```bash
php artisan key:generate
```

4. Create the SQLite database file if it does not exist:

```bash
touch database/database.sqlite
```

5. Run migrations:

```bash
php artisan migrate
```

6. Install frontend dependencies:

```bash
npm install
```

## Run The Website

Start Laravel:

```bash
php artisan serve
```

Start Vite in another terminal for frontend assets:

```bash
npm run dev
```

Then open `http://127.0.0.1:8000`.

## Build Assets

```bash
npm run build
```

## Run Tests

```bash
php artisan test
```
