<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    //28.13
    public function product()
    {
        $products = Product::all();

        return view('Test.result', ['products'=>$products]);
    }

    public function category()
    {
        $categories = Category::all();

        return view('Test.result', ['categories'=>$categories]);

    }
}
