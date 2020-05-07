<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;

class AdminStatisticsController extends Controller
{
    //
    public function index()
    {
        return view('admin.statistics.index');
    }
    public function getStatistics(Request $request)
    {
        if($request->ajax())
        {
            $statistical_date_start = date("Y-m-d H:i:s", strtotime($request->statistical_date_start));
            $statistical_date_end = date("Y-m-d H:i:s", strtotime($request->statistical_date_end));
            $transactions = Transaction::whereBetween('updated_at',[$request->statistical_date_start,$request->statistical_date_end])->get();
            $html = view('admin.statistics.listStatistics',['transactions'=>$transactions,'statistical_date_start'=>$statistical_date_start,'statistical_date_end'=>$statistical_date_end])->render();
            return response()->json($html);
        }
        dd("Lỗi");
    }
}
