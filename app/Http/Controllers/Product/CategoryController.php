<?php

namespace App\Http\Controllers\Product;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function MongoDB\BSON\toJSON;

class CategoryController extends Controller
{
    /**
     * retourne un tableau de toutes les categories
     */
    public function getAllCategories() {
        $categories = Category::all();
        echo $categories;
        return view('testing', ['categories' => $categories]);
    }
    public function getCategoryById($id) {
        $categories= Category::where('id', $id)->get();
        echo $categories;
        return view('testing', ['categories' => $categories]);
    }
}