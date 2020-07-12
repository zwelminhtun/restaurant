@extends('master')
@section('content') 

	<div class="container-fluid banner_01">
		<p class="title text-center">Contact Us</p>
		<p class="txt text-center">Home / Contact</p>
	</div>
	<div class="container py-5 contact">
		<div class="row">
			<div class="col-md-7">
				<p class="title text-success">About Us</p>
				<p class="h3 text-black font-weight-bold">Who We Are?</p>
				<img src="{{asset('img/title-icon.png')}}">
				<p class="text-secondary mt-2 mb-4">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
				<div class="row">
					<div class="col-md-6 text-secondary">
						<p class="text-dark font-weight-bold h4">Hlaing Branch</p>
						<p>Hlaing, Yangon</p>
						<p>Monday to Friday: 9am - 10pm</p>
						<p>zinminhtun107@gmail.com</p>
						<p>0946152652</p>
					</div>
					<div class="col-md-6 text-secondary"> 
						<p class="text-dark font-weight-bold h4">Hlaing Branch</p>
						<p>Hlaing, Yangon</p>
						<p>Monday to Friday: 9am - 10pm</p>
						<p>zinminhtun107@gmail.com</p>
						<p>0946152652</p>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<p class="title text-success">Recommand Us</p>
				<p class="h3 text-black font-weight-bold">Give Us FeedBack</p>
				<img src="{{asset('img/title-icon.png')}}">
				<p class="text-secondary mt-2 mb-4">Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
				<form action="{{ route('feedback.store') }}" method="STORE">
					@csrf
					<input type="text" name="name" class="form-control mb-3" placeholder="Enter Name">
					<input type="email" name="email" class="form-control mb-3" placeholder="Enter Email Address">
					<textarea name="feedback" class="form-control" rows="5 mb-3" placeholder="Enter Full Description"></textarea>
					<input type="submit" name="save" class="btn btn-success mt-3 px-4" value="Send">
				</form>
				
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4541.313269246!2d96.1289164256883!3d16.837561753238152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194c6ea641359%3A0x96fb61ec0a3513c!2z4YCY4YCw4YCQ4YCs4YCb4YCv4YC2!5e0!3m2!1smy!2smm!4v1581391464396!5m2!1smy!2smm"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</div>
@endsection