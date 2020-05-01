<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slugname, $id)
    {
        $category = Category::find($id);
        $products = Product::where([
            'pro_category_id' =>$id,
            'pro_status'       => 1
        ])->get();
        $data =  [
            'category' => $category,
            'products' => $products
        ];
        return view('customer.category.index',$data);
    }
}
