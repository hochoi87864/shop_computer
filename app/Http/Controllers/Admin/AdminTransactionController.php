<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;

class AdminTransactionController extends Controller
{
    //
    public function index()
    {
        $transactions = Transaction::all();
        $data = [
            'transactions' => $transactions
        ];
        return view('admin.transaction.index',$data);
    }
    public function getOrderItem(Request $request,$id)
    {
        if($request->ajax())
        {
            $orders = Order::where('or_transaction_id',$id)->get();
            $html  = view('Admin.transaction.orderItem',compact('orders'))->render();
            return \response()->json($html);
        }
    }
    public function handle(Request $request,$action,$id)
    {
        if($action)
        {
            $transaction = Transaction::find($id);
            switch ($action) {
                case 'delete':
                        $transaction->delete();
                        return redirect()->route('admin.transaction.index')->with('success','Đã hủy giao dịch thành công');
                    break;
                case 'send':
                        $transaction->tr_status= 1;
                        $transaction->save();
                        return redirect()->route('admin.transaction.index')->with('success','Đã gửi hàng thành công !');
            }
        }
    }
    public function transactionPaid($id)
    {
        $transaction = Transaction::find($id);
        $orders = Order::where('or_transaction_id',$id)->get();
        if($orders)
        {
            foreach ($orders as $order)
            {
                $product = Product::find($order->or_product_id);
                if($product->pro_number < $order->qty)
                return redirect()->route('admin.home');
                $product->pro_number =  $product->pro_number - $order->or_qty;
                $product->pro_pay=  $product->pro_pay + $order->or_qty;
                $product->save();
            }
            $transaction->tr_status = 2;
            $transaction->save();
        }
        return redirect()->route('admin.transaction.index');
    }
}
