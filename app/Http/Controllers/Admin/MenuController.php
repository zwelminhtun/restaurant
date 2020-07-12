<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Menu;
use App\Category;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=DB::table('menus')
                ->join('categories','categories.id','=','menus.category_id')
                ->select('menus.*','categories.category as category_name')
                ->get();
       return view('admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
         return view('admin.menu.create',compact('categories')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
 // => infront is input's name
            "category"=>"required", 
            "image"=>"required",
            "name"=>"required",
            "price"=>"required"

        ]); 
        //file upload

        if($request->hasfile('image')){
            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $image='/image/'.$name;
         }
        //save data

        Menu::create([
            "name"=>request('name'),        
            "image"=>$image,
            "category_id"=>request('category'),
            "price"=>request('price'),
           
        ]);

        //return redirect

        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $categories=Category::all();
        $categoryname=Category::find($id);
         $menu=Menu::find($id);
        return view('admin.menu.update',compact('menu','categories','categoryname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'category'=>'required'
         ]);
        //file upload

        if($request->hasfile('image')){
            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $image='/image/'.$name;

                    }else{
                        $image=request('oldimage');
                    } 
        //update data

        $menu=Menu::find($id);
        $menu->name=request('name');
        $menu->image=$image;
        $menu->price=request('price');
        $menu->category_id=request('category');

        if($menu->save()){

        //return redirect
         return redirect(route('menu.index'))->with('success','Menu Updated Success!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Menu::find($id)->delete()){
            return redirect(route('menu.index'))->with('success','Deleted Success!');
       }
    }
}
