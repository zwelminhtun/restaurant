<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class FrontendController extends Controller
{
    public function menu(){
    	$menus=DB::table('menus')
                ->join('categories','categories.id','=','menus.category_id')
                ->select('menus.*','categories.category as category_name')
                ->get();
       return view('menu',compact('menus'));
    }

    public function blog(){
    	$blogs=DB::table('blogs')
                ->orderby('id','desc')
                ->get();
    	return view('blog',compact('blogs'));
    }
}
