<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Truongpv\Question\Controllers')->group(function () {
    Route::middleware(['web', 'auth'])->group(function () {
        Route::resource('questions', 'QuestionController');
    });
});