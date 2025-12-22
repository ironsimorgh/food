<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Contracts\Session\Session as SessionSession;


class ReportController extends Controller
{
    public function AdminAllReports(){
        return view('admin.backend.report.all_report');
    }
    //End Method

    public function AdminSearchByDate(Request $request){
        $date = new DateTime($request->date);
        $formatDate = $date->format('d F Y');
        $orderData = Order::where('order_data',$formatDate)->latest()->get();
        return view('admin.backend.report.search_by_date',compact('orderData','formatDate'));
    }
    //End Method

    public function AdminSearchByMonth(Request $request){
        $month = $request->month;
        $years = $request->year_name;

        $orderMonth = Order::where('order_month',$month)->where('order_year',$years)->latest()->get();
        return view('admin.backend.report.search_by_month',compact('orderMonth','month','years'));
    }
    //End Method

    public function AdminSearchByYear(Request $request){
        $years = $request->year;

        $orderYear = Order::where('order_year',$years)->latest()->get();
        return view('admin.backend.report.search_by_year',compact('orderYear','years'));
    }
    //End Method
    public function ClientAllReports(){
        return view('client.backend.report.all_report');
    }
    //End Method

}
