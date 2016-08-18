<?php

Route::group(['middleware' => ['web']], function () {
	
	Route::get('/', 'UserController@index');
	Route::get('/create', 'UserController@create');
	Route::get('/user/{user}/edit', 'UserController@edit');
	Route::post('/user', 'UserController@store');
	Route::delete('/user/{user}', 'UserController@destroy');

    //Route::auth();

});