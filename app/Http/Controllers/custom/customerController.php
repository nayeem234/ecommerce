<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class customerController extends Controller
{
    public function index()
    {
        $data = Customer::get();
        return view('backend.customer', compact('data'));
    }

    function addform()
    {
     return view('backend.add_customer');

    }
    function store(Request $request){
        $customer= new Customer();
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->mobile_number=$request->mobile_number;
        $customer->address=$request->address;

        $customer->save();
        return redirect()->route('customers');
       // return $request->all();
    }

    function delete($id){
        Customer::findOrFail($id)->delete();
        return "delete sucessfully";

    }
    function preview($id){
          return Customer::find($id);

    }
    function edit(Request $request){
        $customer=Customer::findOrFail($request->editid);
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->mobile_number=$request->mobile_number;
        $customer->address=$request->address;

    }
}
