<?php

namespace App\Http\Controllers\custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index(){
      $data = Product::get();
        return view('backend.product',compact('data'));
    }
function productAdd(){
   return view('backend.add_product');
}

    public function store(Request $request)
    {
       // return $request->all();
      $product= new Product();
       $product->name=$request->name;
      $product->title=$request->title;
       $product->description=$request->description;
      $product->save();
      return redirect()->route('product');

    }

    public function delete($id){
      Product::FindOrFail($id)->delete();
      return "delete suceess";

    }
    function preview($id)
    {
       // return Product::where('id', '=', $id)->get();
       return "text";

    }

   public function edit(Request $request){
    
        $product=Product::findOrFail($request->editid);
        $product->title=$request->title;
        $product->description=$request->description;
       $product->update();
        return redirect()->back();




    }
  }
