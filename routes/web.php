<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('roles','RoleController');
Route::resource('events','EventController');
Route::resource('orders','OrderController');
Route::resource('users','UserController');
Route::resource('webconfigs','WebConfigController');
