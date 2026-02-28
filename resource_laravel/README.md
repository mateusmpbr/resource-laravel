# resource_laravel (Laravel example app)

This folder contains the Laravel application used in this repository. It is a small educational app focused on demonstrating resourceful controllers, migrations, seeders, and Blade views for managing `Estado` and `Cidade` models.

For a general project overview and setup instructions, see the top-level README.

## Quick Links

- Project root README: ../README.md
- Routes: `routes/web.php`
- Models: `app/Estado.php`, `app/Cidade.php`
- Controllers: `app/Http/Controllers/EstadoController.php`, `app/Http/Controllers/CidadeController.php`
- Views: `resources/views/cidades`

## Running locally

Follow the instructions in the top-level README. Typical commands inside this folder:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

## Tests

Run PHPUnit from the project root:

```bash
./vendor/bin/phpunit
```

## License

The application code in this folder is covered by the repository `LICENSE` (MIT).
