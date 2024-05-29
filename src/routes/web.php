<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return back();
});

Route::get('/optimize-clear', function () {
    Artisan::call('optimize:clear');
    return back();
});

Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
    return back();
});

Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return back();
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return back();
});

Route::get('/migrate-fresh', function () {
    Artisan::call('migrate:fresh');
    return back();
});

Route::get('/migrate-seed', function () {
    Artisan::call('db:seed');
    return back();
});