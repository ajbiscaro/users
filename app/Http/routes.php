<?php

use App\User;
use Illuminate\Http\Request;

/**
 * Show User Dashboard
 */
Route::get('/', function () {
	$users = User::orderBy('created_at', 'asc')->get();

    return view('users', [
        'users' => $users
    ]);
	
});

/**
 * Add New User
 */
Route::post('/user', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'lastname' => 'required|max:255',
		'firstname' => 'required|max:255',
		'middlename' => 'required|max:255',
		'email' => 'required|email|unique:users'
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
	
	$user = new User;
    $user->lastname = $request->lastname;
	$user->firstname = $request->firstname;
	$user->middlename = $request->middlename;
	$user->email = $request->email;
    $user->save();

    return redirect('/');
});

/**
 * Delete User
 */
Route::delete('/user/{user}', function (User $user) {
    $user->delete();

    return redirect('/');
});