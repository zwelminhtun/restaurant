@extends('master')
@section('content')

	<div class="container-fluid banner_01">
		<p class="title text-center">Our Blog</p>
		<p class="txt text-center">Home / blog</p>
	</div>
	<div class="container my-5">
		<div class="row">
			@foreach($blogs as $blog)
	        	<div class="menu col-md-4">
			     	<div class="menu_inner py-3 px-3 ">
			        	<div  style="background-image: url({{asset($blog->image)}});background-size: cover;background-position: center; width:100%;height:200px;"></div>
			        	<p class="text-dark h5 my-2 font-weight-bold">{{$blog->title}}</p>
			        	<p class="text-primary mb-0">{{$blog->created_at}}</p>
			        	<p class="text-dark ">{{str_limit($blog->description,100,'........')}}</p>
			        	<button class="btn btn-success blog_seemore" data-image='{{$blog->image}}' data-title='{{$blog->title}}'data-date='{{$blog->created_at}}' data-description='{{$blog->description}}'>Read More</button>
			        		
			        </div>
	        	</div>		
			@endforeach	
		</div>
	</div>
	 <div class="modal fade" id="blog_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                
                <div class="modal-body">
                 <img src="" class="blog_image w-100">
                 	<p class="text-dark h5 my-2 font-weight-bold blog_title"></p>
			        	<p class="text-primary mb-0 blog_date"></p>
			        	<p class="text-dark blog_description"></p>
			        	
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>

@endsection