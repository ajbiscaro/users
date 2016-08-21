<?php

Route::group(['middlewareGroups' => ['web']], function () {
	
	Route::get('/', 'UserController@index');
	Route::get('/user/create', 'UserController@create');
	Route::get('/user/{user}/edit', 'UserController@edit');
	Route::patch('/user/{user}', 'UserController@update');
	Route::post('/user', 'UserController@store');
	Route::delete('/user/{user}', 'UserController@destroy');

    //Route::auth();

});