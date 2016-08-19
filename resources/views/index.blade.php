<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Current Users -->
    @if (count($users) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Users
            	<a href="{{ url('/user/create') }}" class="btn btn-primary"><i class="fa fa-plus-square"></i> New User</a>
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
								
								<td>
									<form class="delete" action="{{ url('user/'.$user->id) }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										
										<a href="{{ url('user/'.$user->id.'/edit') }}" class="btn btn-warning" ><i class="fa fa-pencil-square-o"></i> Edit</a>

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