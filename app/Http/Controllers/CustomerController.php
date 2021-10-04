<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
      public function ViewOrderForCustomer($id){
     $order = DB::table('orders')
        ->join('users','orders.user_id','users.id')   
        ->select('orders.*','users.name','users.phone')
        ->where('orders.id',$id)
        ->first();
        // dd($order);

     $shipping = DB::table('shipping')->where('order_id',$id)->first();
     // dd($shipping);

     $details = DB::table('order_details')
          ->join('products','order_details.product_id','products.id')
          ->select('order_details.*','products.product_code','products.image_one')
          ->where('order_details.order_id',$id)
          ->get();
          // dd($details);
      return view('customer.order.customer_view_order',compact('order','shipping','details'));
  }
   
}
