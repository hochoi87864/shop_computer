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
    public function indexOrder($slugname, $id, $order)
    {
        $category = Category::find($id);
        $products = Product::where([
            'pro_category_id' =>$id,
            'pro_status'       => 1,
        ]);
        switch ($order) {
            case 'd1t':
                $products->where('pro_price','<',1000000000);
                break;
            case '1t-10t':
                $products->whereBetween('pro_price',[1000000,10000000]);
                break;
            case '10t-20t':
                $products->whereBetween('pro_price',[10000000,20000000]);
                break;
            case '20t-50t':
                $products->whereBetween('pro_price',[20000000,50000000]);
            break;
            case 't50t':
                $products->where('pro_price','>',50000000);
            break;
            default:
                dd("Lỗi");
                break;
        }
        $products =$products->orderBy('id','DESC')->paginate(9);
        $data =  [
            'category' => $category,
            'products' => $products
        ];
        return view('customer.category.index',$data);
    }
}
