<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::view('/', 'welcome');


// Authizored
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('users', 'UserController');
Route::resource('forms', 'FormController');

// Broadcasting
Route::get('public-channel', 'BroadcastingController@publicChannel');
Route::get('private-channel/{recievedId}', 'BroadcastingController@privateChannel');
Route::get('present-channel', 'broadcastingController@presentChannel');
Route::post('broadcasting/new-message-public', 'BroadcastingController@newMessagePublic');
Route::post('broadcasting/new-message-private', 'BroadcastingController@newMessagePrivate');

// Email
Route::get('email', 'EmailController@index');

// Queue
Route::get('queue', 'QueueController@index');

// Notify
Route::get('via-database', 'NotificationController@viaDatabase');