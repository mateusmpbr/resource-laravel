# Resource Laravel

This repository contains a small Laravel application demonstrating the use of resourceful controllers, routes and basic CRUD operations for states and cities.

## Overview

- Framework: Laravel (PHP)
- Purpose: Example app showing the `resource` controller pattern, migrations, seeders, and simple Blade views for managing `Estado` (state) and `Cidade` (city) models.

## Key Features

- Resourceful routes and controllers for clean CRUD operations.
- Eloquent models for `Estado` and `Cidade`.
- Database migrations and seeders to create and populate example data.
- Blade templates for listing, showing, creating and editing records.

## Requirements

- PHP 7.4+ (or the version required by the Laravel release used in this project)
- Composer
- MySQL (or another supported database)
- Node.js + NPM (for frontend build if needed)

## Setup (Quick Start)

1. Clone the repo and enter the project directory:

```bash
git clone <repo-url>
cd resource-laravel
```

2. Install PHP dependencies:

```bash
composer install
```

3. Copy the example environment file and set database credentials:

```bash
cp .env.example .env
# then update .env with DB credentials
php artisan key:generate
```

4. Install frontend dependencies (optional):

```bash
npm install
npm run dev    # or npm run production
```

5. Run migrations and seeders:

```bash
php artisan migrate
php artisan db:seed
```

6. Serve the application locally:

```bash
php artisan serve
# open http://127.0.0.1:8000
```

## Database & Migrations

Migration files are located under `database/migrations`. The project includes a migration to create the `cidades` table and the default `users` table. Seeders live in `database/seeds` and provide example `Estado` and `Cidade` records.

## Code Structure Highlights

- `app/Estado.php` and `app/Cidade.php` — Eloquent model definitions.
- `app/Http/Controllers/EstadoController.php` and `app/Http/Controllers/CidadeController.php` — resource controllers handling CRUD operations.
- `routes/web.php` — web routes (resource routes registered here).
- `resources/views/cidades` — Blade templates for cities.

## Running Tests

Run the test suite with:

```bash
./vendor/bin/phpunit
```

## Contributing

Contributions are welcome. For minor fixes or improvements, open a pull request describing the change. For larger changes, open an issue first to discuss the approach.

## License

This project is provided under the MIT license. See the `LICENSE` file for details.

## Notes

This repo is a small educational/example application focusing on resourceful controller patterns in Laravel. If you want, I can also update or expand the project README inside the `resource_laravel` folder with more Laravel-specific guidance.
