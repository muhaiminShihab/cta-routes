<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::prefix('cta-routes')->group(function () {
    Route::get('/storage-link', function () {
        Artisan::call('storage:link');
        return back()->with('message', 'Storage link created successfully.');
    });

    Route::get('/optimize-clear', function () {
        Artisan::call('optimize:clear');
        return back()->with('message', 'Application optimized and cache cleared.');
    });

    Route::get('/cache-clear', function () {
        Artisan::call('cache:clear');
        return back()->with('message', 'Application cache cleared.');
    });

    Route::get('/config-cache', function () {
        Artisan::call('config:cache');
        return back()->with('message', 'Configuration cache created successfully.');
    });

    Route::get('/migrate', function () {
        Artisan::call('migrate');
        return back()->with('message', 'Database migration completed successfully.');
    });

    Route::get('/migrate-fresh', function () {
        Artisan::call('migrate:fresh');
        return back()->with('message', 'Database migration refreshed successfully.');
    });

    Route::get('/migrate-seed', function () {
        Artisan::call('db:seed');
        return back()->with('message', 'Database seeded successfully.');
    });
});
