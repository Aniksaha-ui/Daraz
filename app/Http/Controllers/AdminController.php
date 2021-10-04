<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;
use App\User;
use App\Charts\UserChart;
use DB;
use Charts;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){

$date = date('d-m-y');
$today = DB::table('orders')->where('date',$date)->sum('total');

$month = date('F');
$month = DB::table('orders')->where('month',$month)->sum('total');

$year = date('Y');
$year = DB::table('orders')->where('year',$year)->sum('total');

$delevery = DB::table('orders')->where('date',$date)->where('status',3)->sum('total');


$payment_history=DB::table('orders')
                ->join('users','orders.user_id','users.id')
                ->where('date',$date)->where('payment_type','stripe')->select('*')->get();



        $order_details=DB::table('order_details')
                ->select(DB::raw("SUM(quantity) as totalproduct"),'product_name')
                ->groupBy('product_name')
                ->get();

                


$product = DB::table('products')->get();
$brand = DB::table('brands')->get();
$user = DB::table('users')->get();

    		return view('admin.home',compact('today','month','year','delevery','product','brand','user','payment_history','order_details'));
    }


    

    public  function Logout(){
    	        Auth::logout();

      $notification=array(
            'massage'=>'Admin Successfully logout',
            'alert-type'=>'success'
      );

      return redirect()->route('admin.login')->with($notification);
    }

    public function userfind(){
        $user=User::pagination(5);
        return response()->json($user,200);
    }
}
