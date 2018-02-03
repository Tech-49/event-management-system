<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
