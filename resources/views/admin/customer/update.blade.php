@extends('layouts.admin')
@section('content')
	
			<a href="{{route('customer.index')}}" class="btn btn-warning btn-sm mb-3">Go Back</a>
			<form action="{{route('customer.update',$customer->id)}}" method="post">
				@csrf
				{{method_field('PUT')}}
				
				<div class="form-group">
					<input type="text" name="name" class="form-control mb-3" value="{{$customer->name}}">
					<input type="text" name="c_id" class="form-control mb-3" value="{{$customer->memberid}}">
					<input type="email" name="email" class="form-control mb-3" value="{{$customer->email}}">
					<input type="text" name="phone" class="form-control mb-3" value="{{$customer->phone}}">
					
				</div>
				<input type="submit" name="update" value="Update" class="btn btn-info btn-sm">

			</form>
		
	
@endsection