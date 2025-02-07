<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $orders = DB::table('orders')
        ->join('order_details','orders.id',"=","order_details.order_id")
        ->where('user_id', Auth::id())
        ->select('orders.*','order_details.product_name')
        ->orderBy('id', 'DESC')
        ->limit(10)->get();
return view('home',compact('orders'));
    }

    public function logout(){
        Auth::logout();

      $notification=array(
            'massage'=>'Successfully logout',
            'alert-type'=>'success'
      );

      return redirect()->route('login')->with($notification);
    }

}
