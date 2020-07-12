<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users=User::all();  
       return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $password=request()->password;
        if($password==request()->confirm_password)
        {
             $this->validate(request(),[
                'name'=>'required|min:3',
                'email'=>'required|email|min:10',
                'password'=>'required|min:6',
                'confirm_password'=>'required|min:6'
            ]);
            $user=new User();
            $user->name=request()->name;
            $user->email=request()->email;
            $user->password= Hash::make(request()->password);
            if($user->save()){
                return redirect(route('user.index'))->with('success',$request->name.' Created Success!');
            }
        }
        else{
            return redirect(route('user.create'))->with('different_password','Password and Confirm Password have to be the same!!');
        }
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
    {
          $user=User::find($id);
        return view('admin.user.update',compact('user'));
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
         $this->validate(request(),[
                'name'=>'required|min:3',
                'email'=>'required|email|min:10',
                'new_password'=>'required|min:6'
            ]);
        $user =User::find($id);
        $user->name=request()->name;
        $user->email=request()->email;
        $user->password=Hash::make(request()->new_password);
        if($user->save()){
            return redirect(route('user.index'))->with('success','User Updated Success!');
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
         if(User::find($id)->delete()){
            return redirect(route('user.index'))->with('success','Deleted Success!');
       }
    }
}
