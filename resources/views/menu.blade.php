@extends('master')
@section('content')

	<div class="container-fluid banner_01">
		<p class="title text-center">Menu</p>
		<p class="txt text-center">Home / Menu</p>
	</div>
	<div class="container-fluid  bg-white">
		
		<div class="container py-5">
			 <p class="text-success text-center">Our Menu</p>
	        <p class="text-dark font-weight-bold text-center h2 mb-0 ">What Can U Order Here?</p>
            <p class="text-center"><img src="{{asset('img/title-icon.png')}}"></p>
	        <p class="mb-5 mt-3 text-center  w-75 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  </p>
	       
	        	<div class="container-fluid">
	        		<div class="row">
	        			@foreach($menus as $menu)
	        			<div class=" col-md-6">
			        	<div class="px-3 text-center shadow">
			        		<div class="row mb-3">
			        			<div class="col-4"  style="background-image: url({{asset($menu->image)}});background-size: contain;background-position:center;background-repeat: no-repeat; width:100%;">
			        			</div>
			        			<div class="col-8 text-right my-4">
				        			<p class="text-dark h5 my-2 font-weight-bold">{{$menu->name}}</p>
				        			<p class="text-success h2 font-weight-bold">{{$menu->price}} Ks</p>
				        		</div>	
			        		</div>
			        		
			        		
			        		
			        		<button class="add_cart h4 text-white " data-id='{{$menu->id}}' data-name='{{$menu->name}}'data-price='{{$menu->price}}' data-category='{{$menu->category_name}}'>+</button>
			        		
			        	</div>
	        			</div>		
			        	@endforeach	
	        		</div>
	        	
	        </div>
		</div>

	</div>
@endsection