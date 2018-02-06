<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/event-detail/{event_id}', 'HomeController@event_detail')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('roles','RoleController');
Route::resource('events','EventController');
Route::resource('orders','OrderController');
Route::resource('users','UserController');
Route::resource('webconfigs','WebConfigController');
