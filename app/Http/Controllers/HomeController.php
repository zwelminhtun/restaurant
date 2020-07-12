<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;
use App\Customer;
use App\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $blogs=Blog::all();
        $blogcount=$blogs->count();
        $customers=Customer::all();
        $customercount=$customers->count();
        $menus=Menu::all();
        $menucount=$menus->count();
        $user=User::all();
        $usercount=$user->count();
        return view('home',compact('usercount','blogcount','customercount','blogs','menucount'));
    }
}
