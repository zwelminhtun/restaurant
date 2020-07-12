@extends('layouts.admin')
@section('content')
	
			<a href="{{route('customer.index')}}" class="btn btn-warning btn-sm mb-3">Go Back</a>
			<form action="{{route('customer.store')}}" method="post">
				@csrf
				
					
					<input type="text" name="name"  class="form-control mb-3" required="required" placeholder="Enter Customer Name">
					<input type="text" name="c_id"  class="form-control mb-3" required="required" placeholder="Enter Customer ID">
					<input type="email" name="email"  class="form-control mb-3" required="required" placeholder="Enter Email Address">
					<input type="text" name="phone"  class="form-control mb-3" required="required" placeholder="Enter Phone Number">
					
				
				<input type="submit" name="save" value="Save" class="btn btn-info btn-sm">
			</form>
	
	
@endsection