<?php

Route::group(['middlewareGroups' => ['web']], function () {
	
	Route::get('/', 'UserController@index');
	Route::resource('user', 'UserController');

    //Route::auth();

});