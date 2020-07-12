<?php

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){
	Route::resource('category','CategoryController');
	Route::resource('menu','MenuController');
	Route::resource('user','UserController');
	Route::resource('customer','CustomerController');
	Route::resource('blog','BlogController');
});

Route::resource('feedback','FeedbackController');
Route::get('/feedback.index','FeedbackController@index')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/menu','FrontendController@menu');
Route::get('/blog','FrontendController@blog');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
