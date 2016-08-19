<!-- resources/views/create.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <!-- Display Validation Errors -->
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

        <!-- New User Form -->
        <form action="{{ url('/user') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Last Name -->
            <div class="form-group">
                <label for="lastname" class="col-sm-3 control-label">Last Name</label>

                <div class="col-sm-6">
                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{ old('lastname') }}">
                </div>
            </div>
			
			<!-- First Name -->
            <div class="form-group">
                <label for="firstname" class="col-sm-3 control-label">First Name</label>

                <div class="col-sm-6">
                    <input type="text" name="firstname" id="firstname" class="form-control" value="{{ old('firstname') }}">
                </div>
            </div>
			
			<!-- Middle Name -->
            <div class="form-group">
                <label for="middlename" class="col-sm-3 control-label">Middle Name</label>

                <div class="col-sm-6">
                    <input type="text" name="middlename" id="middlename" class="form-control" value="{{ old('middlenamer') }}">
                </div>
            </div>
			
			<!-- Email -->
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>

                <div class="col-sm-6">
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
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
                    <input type="text" name="birthdate" id="birthdate" class="form-control date" value="{{ old('birthdate') }}">
                </div>
            </div>

            <!-- Add User Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add User
                    </button>
                </div>
            </div>
        </form>
    </div>
	
@endsection