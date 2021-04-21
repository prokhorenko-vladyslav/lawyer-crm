<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->middleware(\App\Http\Middleware\IsAdminMiddleware::class)
    ->name('admin.')
    ->group(function () {

    });
