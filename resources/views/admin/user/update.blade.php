@extends('layouts.admin')
@section('content')
	
			<a href="{{route('user.index')}}" class="btn btn-warning btn-sm mb-3">Go Back</a>
			<form action="{{route('user.update',$user->id)}}" method="post">
				@csrf
				{{method_field('PUT')}}
				
				<div class="form-group">
					<input type="text" name="name" class="form-control mb-3" value="{{$user->name}}">
					<input type="email" name="email" class="form-control mb-3" value="{{$user->email}}">
					<input type="password" name="new_password" class="form-control mb-3" placeholder="Enter New Password">
				</div>
				<input type="submit" name="update" value="Update" class="btn btn-info btn-sm">

			</form>
		
	
@endsection