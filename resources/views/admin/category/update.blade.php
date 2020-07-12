@extends('layouts.admin')
@section('content')
	
			<a href="{{route('category.index')}}" class="btn btn-warning btn-sm mb-3">Go Back</a>
			<form action="{{route('category.update',$category->id)}}" method="post">
				@csrf
				{{method_field('PUT')}}
				
				<div class="form-group">
					<label for="category">Enter Category Name</label>
					<input type="text" name="category" id="category" class="form-control" value="{{$category->category}}">
				</div>
				<input type="submit" name="update" value="Update" class="btn btn-info btn-sm">

			</form>
		
	
@endsection