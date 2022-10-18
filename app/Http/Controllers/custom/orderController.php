<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    public function index()
    {

        $data = Order::get();
        return view('backend.order', compact('data'));
    }



    public function addform()
    {
        return view('backend.add_order');
    }
    public function store(Request $request)
    {
       // return $request->all();
        $order= new Order();
        $order->name=$request->name;
        $order->price=$request->price;
        $order->quantity=$request->quantity;
        $order->stock=$request->stock;
        $order->save();
        return redirect('orders');


    }
    public function delete($id){
        Order::FindOrfail($id)->delete();
        return "delete sucesssfully";
    }
    public function preview($id){
        //return Order::where('id','=',$id)->get();
       return "text";
    }

    public function edit(Request $request){
        $order=Order::findOrFail($request->editid);
        $order->name=$request->name;
        $order->price=$request->price;
        $order->quantity=$request->quantity;
        $order->stock=$request->stock;
       $order->update();
        return redirect()->back();




    }
}
