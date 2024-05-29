# `CtaRoutes` Package for Laravel Applications.

`CtaRoutes` is a Laravel package that provides a set of convenient routes for common Artisan commands. These routes allow you to quickly perform tasks such as clearing caches, creating storage links, and running database migrations directly from your browser.

## Installation

You can install the package via Composer:

```bash
composer require muhaiminshihab/ctaroutes
```

## Available Routes
- Create Storage links:

    Create a symbolic link from `public/storage` to `storage/app/public` using the `storage:link` command.

    ```bash
    GET /storage-link
    ```

- Clear Optimized Files

    Remove the compiled class file, caches, and more using the `optimize:clear` command.

    ```bash
    GET /optimize-clear
    ```

- Clear Application Cache

    Clear the application cache using the `cache:clear` command.

    ```bash
    GET /cache-clear
    ```

- Cache Configuration

    Create a cache file for faster configuration loading using the `config:cache` command.

    ```bash
    GET /config-cache
    ```

- Run Database Migrations

    Run the database migrations using the `migrate` command.

    ```bash
    GET /migrate
    ```

- Run Fresh Database Migrations

    Drop all tables and re-run all migrations using the `migrate:fresh` command.

    ```bash
    GET /migrate-fresh
    ```

- Seed Database

    Seed the database with records using the `db:seed` command.

    ```bash
    GET /migrate-seed
    ```

## Example

To use these routes, simply visit them in your browser. For example, to clear the application cache, go to:

```
http://your-app-url/cache-clear
```

## Security

These routes execute powerful Artisan commands and should be used with caution. It's recommended to protect these routes with appropriate middleware or use them in a development environment only.

## Authors

- [@muhaiminShihab](https://www.github.com/muhaiminShihab)

## Licence

This package is open-sourced software licensed under the MIT license.

