<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nofitication;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
                        if($transaction->tr_status == 0)
                        {
                            $orders = Order::where('or_transaction_id',$id)->get();
                            if($orders)
                            {
                                foreach($orders as $order)
                                {
                                    $order->delete();
                                }
                            }
                            Nofitication::insert(
                                [
                                    'nof_sender' => Auth::user()->id,
                                    'nof_receiver' =>$transaction->tr_user_id,
                                    'nof_content' => 'Giao dịch mã số '.$id.' với nội dung "'.$transaction->nof_content.'" đã bị hủy ! Có thể do thiếu số lượng sản phẩm bạn yêu cầu, liên hệ lại chủ cửa hàng để biết thêm chi tiết !!!',
                                    'created_at' => Carbon::now(),
                                ]
                                );
                        }
                        else if($transaction->tr_status == 1)
                        {
                            // find orders of customer in transaction
                            $orders = Order::where('or_transaction_id',$id)->get();
                            if($orders)
                            {
                                foreach ($orders as $order)
                                {
                                    // find product in order
                                    $product = Product::find($order->or_product_id);
                                    $product->pro_number =  $product->pro_number + $order->or_qty;
                                    $product->save();
                                    $order->delete();
                                }
                            }
                            Nofitication::insert(
                                [
                                    'nof_sender' => Auth::user()->id,
                                    'nof_receiver' =>$transaction->tr_user_id,
                                    'nof_content' => 'Giao dịch mã số '.$id.' với nội dung "'.$transaction->nof_content.'" đã bị hủy trong khi vận chuyển !! Liên lạc lại chủ cửa hàng để biết thêm chi tiết !',
                                    'created_at' => Carbon::now()
                                ]
                                );
                        }
                        else
                        {
                            $request->session()->flash('stopDelete', 'Giao dịch này đã thành công hoặc có dữ liệu quan trọng không thể xóa !!!');
                        }
                        $transaction->delete();
                        return redirect()->route('admin.transaction.index')->with('success','Đã hủy giao dịch thành công');
                    break;
                case 'send':
                        // find orders of customer in transaction    
                        $orders = Order::where('or_transaction_id',$id)->get();
                        if($orders)
                        {
                            foreach ($orders as $order)
                            {
                                // find product in order
                                $product = Product::find($order->or_product_id);
                                // check number product enough number product customer buy
                                if($product->pro_number < $order->or_qty)
                                {
                                    Nofitication::insert(
                                        [
                                            'nof_sender' => Auth::user()->id,
                                            'nof_receiver' =>$transaction->tr_user_id,
                                            'nof_content' => 'Giao dịch mã số '.$id.' có sản phẩm '.$product->pro_name.' đã hết hàng ! Chủ cửa hàng có thể nhập thêm hoặc đơn hàng này sẽ bị hủy !!!',
                                            'created_at' => Carbon::now()
                                        ]
                                        );
                                    $request->session()->flash('OutOfStock', 'Sản phẩm '.$product->pro_name.' đã hết hàng không thể thay đổi trạng thái giao dịch này !!!');
                                    return redirect()->back();
                                }
                                
                                // subtract number product in stock
                                $product->pro_number =  $product->pro_number - $order->or_qty;
                                $product->save();
                            }
                            $transaction->tr_status= 1;
                            $transaction->save();
                        }
                        return redirect()->route('admin.transaction.index')->with('success','Đã gửi hàng thành công !');
            }
        }
    }
    public function transactionPaid($id)
    {
        $transaction = Transaction::find($id);
        // find orders of customer in transaction 
        $orders = Order::where('or_transaction_id',$id)->get();
        if($orders)
        {
            foreach ($orders as $order)
            {
                // find product in order
                $product = Product::find($order->or_product_id);
                //Add number product bought in table product   
                $product->pro_pay=  $product->pro_pay + $order->or_qty;
                $product->save();
            }
            $transaction->tr_status = 2;
            $transaction->save();
        }
        return redirect()->route('admin.transaction.index');
    }
}
