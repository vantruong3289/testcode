<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::view('/', 'welcome');


// Authizored
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::resource('roomchats', 'RoomChatController');
Route::resource('questions', 'QuestionController');
