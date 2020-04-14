<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
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
}
