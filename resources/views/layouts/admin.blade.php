 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mountain-Restaurant</title>

     <link rel="icon" type="image/png" href="{{ asset('img/title-icon.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/sandstone/bootstrap.min.css"> -->

    <style type="text/css">
        .badgee{

                display: inline-block;
                padding: 0.25em 0.4em;
                font-size: 75%;
                font-weight: 700;
                line-height: 1;
                text-align: center;
                white-space: nowrap;
                vertical-align: baseline;
                border-radius: 0.25rem;
                -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        }
        .form-inline{
            display: inline;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Mountain Restaurant') }} -->
                    <img src="{{asset('img/logo.png')}}" alt="Mountain Restaurant" class="w-75">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-3">
        				<ul class="list-group">
        					<li class="list-group-item text-white" style="background-image: linear-gradient(to right,#2bc16b,rgb(2, 144, 62));">
        						Control Panel
        					</li>
                            <li class="list-group-item">
                                <a href="{{route('home')}}">Home</a>
                            </li>
        					<li class="list-group-item">
        						<a href="{{route('category.index')}}">Category</a>
        					</li>
        					<li class="list-group-item">
        						<a href="{{route('menu.index')}}">Menu</a>
        					</li>
                            <li class="list-group-item">
                                <a href="{{route('blog.index')}}">Blog</a>
                            </li>
        					<li class="list-group-item">
        						<a href="{{route('user.index')}}">User</a>
        					</li>
        					<li class="list-group-item">
        						<a href="{{route('customer.index')}}">Customer</a>
        					</li>
        					<li class="list-group-item">
        						<a href="#">Order</a>
        					</li>
                            <li class="list-group-item">
                                <a href="#">Ordered Items</a>
                            </li>
        					
        				</ul>
        			</div>
        			<div class="col-md-9">
                        <div class="card">
                            <div class="card-header text-white"  style="background-image: linear-gradient(to right,#2bc16b,rgb(2, 144, 62));">
                                Dashboard
                            </div>
                            <div class="card-body">
                                @include('layouts.error')
                                @yield('content')
                            </div>
                        </div>
        			</div>
        		</div>
        	</div>
            
        </main>
    </div>
   
</body>
</html>
