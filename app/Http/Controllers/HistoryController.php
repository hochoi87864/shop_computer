<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends CustomerController
{
    //
    public function index()
    {
        $user = Auth::user();
        $transactions = $user->Transaction;
        $data =  [
            'transactions' => $transactions
        ];
        return view('customer.history.index',$data);
    }
    public function getOrderItem(Request $request, $id)
    {
        if($request->ajax())
        {
            $orders = Order::where('or_transaction_id',$id)->get();
            $html  = view('Admin.transaction.orderItem',compact('orders'))->render();
            return \response()->json($html);
        }
    }
}
