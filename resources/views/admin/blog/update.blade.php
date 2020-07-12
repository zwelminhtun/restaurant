@extends('layouts.admin')
@section('content')
	
			<a href="{{route('blog.index')}}" class="btn btn-warning btn-sm mb-3">Go Back</a>
			<form action="{{route('blog.update',$blog->id)}}" method="post">
				@csrf
				{{method_field('PUT')}} 
				
				<div class="form-group">
					<label for="title">Enter Blog Title</label>
					<input type="text" name="title" id="title" class="form-control" value="{{$blog->title}}">
				</div>
				<div class="form-group">
					<label for="description">Enter Blog Description</label>
					<input type="text" name="description" id="description" class="form-control" value="{{$blog->description}}">
				</div>
				<input type="file" name="image" class="my-3 " >
                <input type="hidden" name="oldimage" value="{{ $blog->image}}"><br>
				<input type="submit" name="update" value="Update" class="btn btn-info btn-sm">

			</form>
		
	
@endsection