<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producer;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::get();
        //return $data;
        return view('list', compact('data'));
    }

    public function add()
    {
        $data = Producer::get();
        return view('add', compact('data'));
    }

    public function save(Request $request)
    {
        //dd($request->all());
        $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $details = $request->details;
        $image1 = $request->image1;
        $producer = $request->producer;

        $product = new Product();

        $product->productID = $id;
        $product->productName = $name;
        $product->productPrice = $price;
        $product->productDetails = $details;
        $product->productImage1 = $image1;
        $product->producerID = $producer;
        $product->save();

        return redirect()->back()->with('success', 'Product add successfully!');

    }
    
    public function edit($id)
    {
        $producers = Producer::get();
        $data = Product::where('productID', '=', $id)->first();
        return view('edit', compact('data', 'producers'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        Product::where('productID', '=', $id)->update([
            'productName'=>$request->name,
            'productPrice'=>$request->price,
            'productDetails'=>$request->details,
            'productImage1'=>$request->image1,
            'producerID'=>$request->producer
        ]);

        return redirect()->back()->with('success', 'Product updated successfully!');
    }

    public function delete($id)
    {
        Product::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }

}
