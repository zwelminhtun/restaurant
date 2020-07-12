@extends('layouts.admin')
@section('content')
	
			<a href="{{route('user.index')}}" class="btn btn-warning btn-sm mb-3">Go Back</a>
			<form action="{{route('user.store')}}" method="post">
				@csrf
				
					
					<input type="text" name="name"  class="form-control mb-3" required="required" placeholder="Enter User Name">
					<input type="email" name="email"  class="form-control mb-3" required="required" placeholder="Enter Email Address">
					<input type="password" name="password" class="form-control mb-3" required="required" placeholder="Enter Password">
					<input type="password" name="confirm_password" class="form-control mb-3" required="required" placeholder="Enter Confirm Password">
				
				<input type="submit" name="save" value="Save" class="btn btn-info btn-sm">
			</form>
	
	
@endsection