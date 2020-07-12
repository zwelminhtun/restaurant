@if(count($errors))
	@foreach ($errors->all() as $e)
		<p class="alert alert-danger">{{$e}}</p>
	@endforeach
@endif

@if(Session::has('success'))
	<p class="alert alert-info">{{Session::get('success')}}</p>
@endif
@if(Session::has('different_password'))
	<p class="alert alert-danger">{{Session::get('different_password')}}</p>
@endif