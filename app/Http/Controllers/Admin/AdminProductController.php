<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }
    public function create()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories
        ];
        return view('admin.product.create',$data);
    }
    public function store(Request $request)
    {
        $this->insertOrUpdate($request);
        return redirect()->route('admin.product.index');
        //check input

    }
    public function insertOrUpdate($request,$id=''){
        $product = new Product();
        $product->pro_name = $request->pro_name;
        $product->pro_name_slug = str_slug($request->pro_name);
        $product->pro_description = $request->pro_description;
        $product->pro_content = $request->pro_content;
        $product->pro_category_id = $request->pro_category_id;
        $product->pro_price = $request->pro_price;
        $product->pro_number = $request->pro_number;
        $product->pro_sale = $request->pro_sale;
        $product->save();
    }
}
