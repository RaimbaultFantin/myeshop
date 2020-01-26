<?php

namespace App\Http\Controllers;

use App\Http\Entity\PropertySearch;
use App\Family;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class Test extends Controller
{
    public function index()
    {
        $brands = Family::all();
        $maxPrice = Product::max('price');
        $sizes = Product::select('size')->groupBy('size')->get();
        $categories = Category::all();
        return response()->json([
            'brands' => $brands,
            'maxPrice' => $maxPrice,
            'sizes' => $sizes,
            'categories' => $categories
        ]);
    }

    public function getProducts(Request $request)
    {
        $search = new PropertySearch($request);
        $products = Product::GetProducts($search)
        ->get();
        return response()->json($products);
    }
}
