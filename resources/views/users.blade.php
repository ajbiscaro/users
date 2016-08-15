<!-- resources/views/users.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New User Form -->
        <form action="{{ url('user') }}" method="POST" class="form-horizontal">
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

    <!-- Current Users -->
    @if (count($users) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Users
            </div>

            <div class="panel-body">
                <table class="table table-striped user-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Last Name</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Email</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <!-- Last Name -->
                                <td class="table-text">
                                    <div>{{ $user->lastname }}</div>
                                </td>
								<!-- First Name -->
								<td class="table-text">
                                    <div>{{ $user->firstname }}</div>
                                </td>
								<!-- Middle Name -->
								<td class="table-text">
                                    <div>{{ $user->middlename }}</div>
                                </td>
                                <!-- Email -->
								<td class="table-text">
                                    <div>{{ $user->email }}</div>
                                </td>
								
								<!-- Delete Button -->
								<td>
									<form action="{{ url('user/'.$user->id) }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<button type="submit" class="btn btn-danger">
											<i class="fa fa-trash"></i> Delete
										</button>
									</form>
								</td>
								
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
	
@endsection