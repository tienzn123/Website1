<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
class ProductController2 extends Controller
{
    public function index()
    {
        //$data = Product::get();
        //return view('list', compact('data'));
        return view('1001a.home');
    }

    public function showProducts()
    {
        $data = Product::get();
        return view('1001a.products', compact('data'));
    }

    public function details($id)
    {
        $product = Product::where('productID', '=', $id)->first();
        return view('1001a.details', compact('product'));
    }
}
