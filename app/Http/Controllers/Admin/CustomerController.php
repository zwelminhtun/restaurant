<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $customers=Customer::all();  
       return view('admin.customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.customer.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $this->validate(request(),[
                'name'=>'required|min:3',
                'c_id'=>'required|min:3',
                'email'=>'required|email|min:10',
                'phone'=>'required|min:5'
            ]);
            $customer=new Customer();
            $customer->name=request()->name;
            $customer->memberid=request()->c_id;
            $customer->email=request()->email;
            $customer->phone= request()->phone;
            if($customer->save()){
                return redirect(route('customer.index'))->with('success',$request->name.' Created Success!');
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
         $customer=Customer::find($id);
        return view('admin.customer.update',compact('customer'));
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
                'c_id'=>'required|min:3',
                'email'=>'required|email|min:10',
                'phone'=>'required|min:5'
            ]);
        $customer =Customer::find($id);
        $customer->name=request()->name;
        $customer->memberid=request()->c_id;
        $customer->email=request()->email;
        $customer->phone=request()->phone;
        if($customer->save()){
            return redirect(route('customer.index'))->with('success','Customer Updated Success!');
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
         if(Customer::find($id)->delete()){
            return redirect(route('customer.index'))->with('success','Deleted Success!');
       }
    }
}
