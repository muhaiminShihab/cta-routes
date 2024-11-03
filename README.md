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
    GET /cta-routes/storage-link
    ```

- Clear Optimized Files

    Remove the compiled class file, caches, and more using the `optimize:clear` command.

    ```bash
    GET /cta-routes/optimize-clear
    ```

- Clear Application Cache

    Clear the application cache using the `cache:clear` command.

    ```bash
    GET /cta-routes/cache-clear
    ```

- Cache Configuration

    Create a cache file for faster configuration loading using the `config:cache` command.

    ```bash
    GET /cta-routes/config-cache
    ```

- Run Database Migrations

    Run the database migrations using the `migrate` command.

    ```bash
    GET /cta-routes/migrate
    ```

- Run Fresh Database Migrations

    Drop all tables and re-run all migrations using the `migrate:fresh` command.

    ```bash
    GET /cta-routes/migrate-fresh
    ```

- Seed Database

    Seed the database with records using the `db:seed` command.

    ```bash
    GET /cta-routes/migrate-seed
    ```

## Usage

To use these routes, simply visit them in your browser. For example, to clear the application cache, go to:

```
http://your-app-url/cta-routes/cache-clear
```

A flash message will notify you of the action's result in the `message` session. For example: "Application optimized and cache cleared."

## Security

These routes execute powerful Artisan commands and should be used with caution. It's recommended to protect these routes with appropriate middleware or use them in a development environment only.

## Licence

This package is open-sourced software licensed under the MIT license.

## Stargazers
[![Stargazers repo roster for @muhaiminShihab/cta-routes](https://reporoster.com/stars/notext/muhaiminShihab/cta-routes)](https://github.com/muhaiminShihab/cta-routes/stargazers)

## Forkers
[![Forkers repo roster for @muhaiminShihab/cta-routes](https://reporoster.com/forks/notext/muhaiminShihab/cta-routes)](https://github.com/muhaiminShihab/cta-routes/network/members)

### Contributors
<a href="https://github.com/muhaiminShihab/cta-routes/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=muhaiminShihab/cta-routes" />
</a>

