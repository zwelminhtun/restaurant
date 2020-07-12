@extends('layouts.admin')
@section('content')
	
			<a href="{{route('menu.index')}}" class="btn btn-warning btn-sm mb-3">Go Back</a>
			<form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
				@csrf
					
					<select name="category" id="category" class="form-control mb-3">
						<option >Select Menu Category</option>
						@foreach($categories as $category)
							<option value="{{$category->id}}"> {{$category->category}}</option>
						@endforeach
						
					</select>
					<input type="text" name="name"  class="form-control mb-3" required="required" placeholder="Enter Menu Name">
					<input type="text" name="price" class="form-control mb-3" required="required" placeholder="Enter Menu Price">
					<input type="file" name="image" class="mb-3 d-block" required="required">
				<input type="submit" name="save" value="Save" class="btn btn-info btn-sm">
			</form>
	
	
@endsection