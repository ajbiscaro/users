<?php

Route::group(['middleware' => ['web']], function () {
	
	Route::get('/', 'UserController@index');
	Route::get('/create', 'UserController@create');
	Route::get('/edit/{user}', 'UserController@edit');
	Route::post('/user', 'UserController@store');
	Route::delete('/delete/{user}', 'UserController@destroy');

    //Route::auth();

});