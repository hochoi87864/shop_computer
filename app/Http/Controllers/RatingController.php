<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends CustomerController
{
    public function saveRating(Request $request, $id)
    {
        if($request->ajax())
        {
            Rating::insert([
                'ra_product_id'=>$id,
                'ra_number'=>$request->number,
                'ra_content'=>$request->content,
                'ra_user_id' => Auth::user()->id,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
            $product = Product::find($id);
            $product->pro_total_star += $request->number;
            $product->pro_number_of_reviewers += 1;
            $product->save();
            return \response()->json(['code'=>1]);
        }
    }
}
