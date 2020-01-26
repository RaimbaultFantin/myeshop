<?php

namespace App\Http\Controllers;
use App\Product;

class ProductController extends Controller
{
    public function getMenProducts()
    {
        return view('Layouts.men');
    }

    public function getWomenProducts()
    {
        return view('Layouts.women');
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product = $product->load('category');
        return view('products.currentProduct', compact('product'));
    }
}
