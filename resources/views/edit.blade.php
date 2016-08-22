<!-- resources/views/edit.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New User Form -->
        <form action="/user/{{ $user->id }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
			{{ method_field('PATCH') }}

            <!-- Last Name -->
            <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">Last Name</label>

                <div class="col-sm-6">
                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{ $user->lastname }}">
                </div>
            </div>
			
			<!-- First Name -->
            <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label">First Name</label>

                <div class="col-sm-6">
                    <input type="text" name="firstname" id="firstname" class="form-control" value="{{ $user->firstname }}">
                </div>
            </div>
			
			<!-- Middle Name -->
            <div class="form-group">
                <label for="middlename" class="col-sm-3 control-label">Middle Name</label>

                <div class="col-sm-6">
                    <input type="text" name="middlename" id="middlename" class="form-control" value="{{ $user->middlename }}">
                </div>
            </div>
			
			<!-- Email -->
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>

                <div class="col-sm-6">
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                </div>
            </div>
			
			<!-- Password -->
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>

                <div class="col-sm-6">
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
			
			
			<!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation" class="col-sm-3 control-label">Confirm Password</label>

                <div class="col-sm-6">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>
            </div>
			
			<!-- Birthdate -->
            <div class="form-group">
                <label for="birthdate" class="col-sm-3 control-label">Birthdate</label>

                <div class="col-sm-6">
                    <input type="text" name="birthdate" id="birthdate" class="form-control date" value="{{ $user->birthdate }}">
                </div>
            </div>

            <!-- Add User Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add User
                    </button>
					<a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to list</a>
                </div>
            </div>
        </form>
    </div>
	
@endsection