@extends('layouts.admin')
@section('content')
	
			<a href="{{route('menu.index')}}" class="btn btn-warning btn-sm mb-3">Go Back</a>
			<form action="{{route('menu.update',$menu->id)}}" method="post">
				@csrf
				{{method_field('PUT')}}
				<select name="category" id="category" class="form-control mb-3">
						<option class="text-dark" value="{{$menu->category_id}}">Choose Category Name</option>
						@foreach($categories as $category)
							<option value="{{$category->id}}"> {{$category->category}}</option>
						@endforeach
				</select>
				<div class="form-group">
					<label for="menu">Enter Menu Name</label>
					<input type="text" name="name" id="menu" class="form-control" value="{{$menu->name}}">
				</div>
				<div class="form-group">
					<label for="price">Enter Menu Price</label>
					<input type="text" name="price" id="price" class="form-control" value="{{$menu->price}}">
				</div>
				<input type="file" name="image" class="my-3 " >
                <input type="hidden" name="oldimage" value="{{ $menu->image}}"><br>
				<input type="submit" name="update" value="Update" class="btn btn-info btn-sm">

			</form>
		
	
@endsection