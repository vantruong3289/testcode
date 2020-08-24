<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Truongpv\Broadcasting\Controllers')->group(function () {
    Route::middleware(['web', 'auth'])->group(function () {
        // Route::get('message', 'QuestionController');
    });
});