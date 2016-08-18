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
		$user = new User;
		$user->lastname = $request->lastname;
		$user->firstname = $request->firstname;
		$user->middlename = $request->middlename;
		$user->email = $request->email;
		$user->password = $request->password;
		$user->birthdate = $request->birthdate;
		$user->save();

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
}
