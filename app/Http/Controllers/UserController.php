<?php

namespace App\Http\Controllers;

use Session;

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
		$users = User::orderBy('created_at', 'asc')->paginate(5);
		
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

		$input = $request->all();
		
		User::create($input);
		
		Session::flash('flash_message', 'User successfully added!');
		
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
        $user->delete();
		
		Session::flash('flash_message', 'User successfully deleted!');

        return redirect('/');
    }

	public function edit(User $user)
	{
		return view('edit',compact('user'));
	}	
	
	public function update($id, Request $request)
    {
		$this->validate($request, [
			'lastname' => 'required|max:255',
			'firstname' => 'required|max:255',
			'middlename' => 'required|max:255',
			'email' => 'required|email|unique:users',
			'password' => 'required|confirmed',
			'birthdate' => 'required|date_format:"Y-m-d"',
		]);
		
		$user = User::findOrFail($id);
		$input = $request->all();

		$user->fill($input)->save();
		
		Session::flash('flash_message', 'User successfully updated!');
		
		return redirect('/');
	}
}


