<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Truongpv\Dashboard\Controllers')->group(function () {
    Route::middleware(['web', 'auth'])->group(function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    });
});