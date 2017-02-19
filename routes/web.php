<?php

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function() {
	Route::get('/', 'HomeController@index');
});
