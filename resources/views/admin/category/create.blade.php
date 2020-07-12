@extends('layouts.admin')
@section('content')
	
			<a href="{{route('category.index')}}" class="btn btn-warning btn-sm mb-3">Go Back</a>
			<form action="{{route('category.store')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="category">Enter Category Name</label>
					<input type="text" name="category" id="category" class="form-control" required="required">
				</div>
				<input type="submit" name="save" value="Save" class="btn btn-info btn-sm">
			</form>
	
	
@endsection