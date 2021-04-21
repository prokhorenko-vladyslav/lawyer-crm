<?php

use Illuminate\Support\Facades\Route;

Route::name('client.')
    ->group(function () {
        Route::view('/', 'client.pages.home');
    });
