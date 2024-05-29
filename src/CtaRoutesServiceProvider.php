<?php

namespace MuhaiminShihab\CtaRoutes;

use Illuminate\Support\ServiceProvider;

class YourPackageNameServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Register package services, if any
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }
}
