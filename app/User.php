<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
		'lastname',
		'firstname',
		'middlename',
		'email',
		'password',
		'birthdate',
	];
}
