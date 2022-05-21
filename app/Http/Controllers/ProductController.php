<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        //die dump
        //dd($products);
        //compact used to send back the string
        return view('shop.index', compact('products'));
    }
    public function show($id){
        $product = Product::FindOrFail($id);

        return view('shop.show', compact('product'));
    }
}
