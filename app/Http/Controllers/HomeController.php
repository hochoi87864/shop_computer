<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends CustomerController
{
    public function index()
    {
        $categories = Category::all();
        $articles = Article::take(3)->get();
        $hotproducts = Product::where([
            'pro_status' => '1',
            'pro_hot' => '1'
        ])->orderBy('id','DESC')->limit(5)->get();
        $product_best_pay = Product::where('pro_status',1)->orderBy('pro_pay','DESC')->limit(5)->get();
        $data= [
            'categories' => $categories,
            'hotproducts' => $hotproducts,
            'articles' => $articles,
            'product_best_pays' => $product_best_pay
        ];
        return view('customer.index',$data);
    }
}
