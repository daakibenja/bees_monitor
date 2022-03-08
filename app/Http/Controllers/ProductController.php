<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//imports
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return response()->json($products);
    }
    //insert into the database
    public function store(Request $request){
        //validation
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'category'=>'required',
            'imageUrl'=>'required',
        ]);

        //save to db
        $product = Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'category'=>$request->category,
            'description'=>$request->description,
            'imageUrl'=>$request->imageUrl,
        ]);
        //return response
        return response()->json($product);
    }
    public function update(Request $request, Product $product){
        //validation
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'category'=>'required',
            'imageUrl'=>'required',
        ]);

        //update
        $product->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'category'=>$request->category,
            'description'=>$request->description,
            'imageUrl'=>$request->imageUrl,
        ]);
        //return response
        return response()->json($product);
    }
    public function destroy(Product $product){
        $product->delete();
        return response()->json($product);
    }
}
