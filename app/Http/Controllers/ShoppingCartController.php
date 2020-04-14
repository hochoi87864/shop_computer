<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $products = \Cart::content();
        $data = [
            'products' => $products
        ];
        return view('customer.shoppingCart.index',$data);
    }
    //
    public function addProduct(Request $request,$id)
    {
        $product = Product::find($id);
        if(!$product)
        {
            return redirect()->route('home');
        }
        $price = $product->pro_price;
        if($product->pro_sale){
            $price = $price*(100-$product->pro_sale)/100;
        }
        \Cart::add(
                [
                    'id'=>$id,
                    'name' => $product->pro_name,
                    'qty' =>1,
                    'weight' => 0,
                    'price' => $price,
                    'options' => [
                        'image' => $product->pro_image,
                        'price_old' => $product->pro_price,
                        'sale'=> $product->pro_sale
                    ]
                ]
            );
        return redirect()->route('home');
    }
    public function deleteProductItem($key)
    {
        \Cart::remove($key);
        return redirect()->back();
    }
}
