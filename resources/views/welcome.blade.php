@extends('master')
@section('content')

<div class="container-fluid banner">
     <div class="banner_txt">
         <p class="title text-success">Mountain Restaurant</p>
         <p class="h6 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt <br>ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit, sed do eiusmod tempor incididunt</p>
         <a href="#" class="btn btn-lg btn-outline-success mr-3">About Us</a>
         <a href="#" class="btn btn-lg btn-success">Contact Us</a>
     </div>
</div>
<div class="container-fluid bg-white">
    <div class="container who py-5 ">
        <p class="text-success text-center">About Us</p>
        <p class="text-dark font-weight-bold text-center h2">Who We Are?</p>
        <p class="mb-5 mt-3 text-center  w-75 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  </p>
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="{{asset('img/who1.png')}}" >
                <p class=" text-dark h5 my-3 font-weight-bold">Natural Farm</p>
                <p class=" text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{asset('img/who2.png')}}" >
                <p class=" text-dark h5 my-3 font-weight-bold">Healthy Food</p>
                <p class=" text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{asset('img/who3.png')}}" >
                <p class=" text-dark h5 my-3 font-weight-bold">Biologically Safe</p>
                <p class=" text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{asset('img/who4.png')}}" >
                <p class=" text-dark h5 my-3 font-weight-bold">Fresh & Delicious</p>
                <p class=" text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid why ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 " style="background-image: url({{asset('img/why.png')}}); background-size: contain; background-position: right top; background-repeat: no-repeat;">
                
            </div>
             <div class="col-md-6 py-5">
                <div class="my-auto py-5">
                     <p class="text-success">What is Mountain Restaurant?</p>
                     <p class="h2 text-dark font-weight-bold ">Why We Are The Best?</p>
                     <p class="text-secondary mt-3 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua.</p>
                     <ul>
                        <li class="mb-3">Get creative with courgettes</li> 
                        <li class="mb-3">Italian style meatballs with courgette ‘tagliatelle’</li>
                        <li class="mb-3">How to fillet round fish (mackerel, trout, etc.)</li>
                        <li class="mb-3">Irish fish chowder with soda bread</li>
                        <li class="mb-3">Equipment you will need for this technique</li>
                     </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-white py-5">
    <div class="container py-5">
        <p class="text-success text-center">FeedBacks</p>
        <p class="text-dark font-weight-bold text-center h2">What Our Customer Saying?</p>
        <p class="mb-5 mt-3 text-center  w-75 mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  </p>
        <div class="customer">
             <div class="customer_inner">
                <img src="{{asset('img/testimonial3.jpg')}}" class="img">
                <p class="text-secondary my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>
                <p class="text-success h6">-Zin Min Htun-</p>
            </div>
            <div class="customer_inner">
                <img src="{{asset('img/testimonial1.jpg')}}" class="img">
                <p class="text-secondary my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>
                <p class="text-success h6">-Chan Nyein Tun-</p>
            </div>
             <div class="customer_inner">
                <img src="{{asset('img/testimonial2.jpg')}}" class="img">
                <p class="text-secondary my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. </p>
                <p class="text-success h6">-Hlaing Phu Wai-</p>
            </div>
        </div>
    </div>
</div>
@endsection