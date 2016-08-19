<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
	
	/**
	 * Show Users
	**/
	public function index()
	{
		$users = User::orderBy('created_at', 'asc')->get();
		
		return view('index',compact('users')); 
	}
	
	
    /**
     * Show the form for creating a new user.
     *
     */
    public function create()
    {
        return view('create');
    }
	
	 /**
     * Create a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {	
		$this->validate($request, [
			'lastname' => 'required|max:255',
			'firstname' => 'required|max:255',
			'middlename' => 'required|max:255',
			'email' => 'required|email|unique:users',
			'password' => 'required|confirmed',
			'birthdate' => 'required|date_format:"Y-m-d"',
		]);

		/*if ($validator->fails()) {
			return redirect('/user/create')
				->withInput()
				->withErrors($validator);
		}*/
		
		$input = $request->all();
		
		User::create($input);
		
		return redirect('/');
    }
	
	 /**
     * Destroy the given user.
     *
     * @param  Request  $request
     * @param  User  $user
     * @return Response
     */
    public function destroy(Request $request, User $user)
    {
        //$this->authorize('destroy', $task);

        $user->delete();

        return redirect('/');
    }

	public function edit(User $user)
	{
		return view('edit',compact('user'));
	}	
}


