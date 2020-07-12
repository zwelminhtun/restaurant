@extends('layouts.admin')
@section('content')
	
			<a href="{{route('blog.index')}}" class="btn btn-warning btn-sm mb-3">Go Back</a>
			<form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				
					
					<input type="text" name="title"  class="form-control mb-3" required="required" placeholder="Enter Blog Title">
					<textarea name="description" class="form-control mb-3" rows="5" placeholder="Enter Full Description"></textarea>
					<input type="file" name="image" class="mb-3 d-block" required="required">
					
				
				<input type="submit" name="save" value="Save" class="btn btn-info btn-sm">
			</form>
	
	
@endsection