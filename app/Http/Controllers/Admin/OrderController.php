<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth:admin');
    }

   public function NewOrder(){
    
     $order = DB::table('orders')->where('status',0)->get();
     return view('admin.order.pending',compact('order'));

    }

        public function ViewOrder($id){

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
     	return view('admin.order.view_order',compact('order','shipping','details'));		

    }

        public function PaymentAccept($id){
    DB::table('orders')->where('id',$id)->update(['status'=>1]);
     $notification=array(
            'massage'=>'Order Accept Done',
            'alert-type'=>'success'
      );
           return Redirect()->route('admin.neworder')->with($notification); 
    } 


      public function PaymentCancel($id){
    DB::table('orders')->where('id',$id)->update(['status'=>4]);
     $notification=array(
            'massage'=>'Order Cancle',
            'alert-type'=>'success'
      );
           return Redirect()->route('admin.neworder')->with($notification); 
  }



          public function DeliveryProcess($id){
    DB::table('orders')->where('id',$id)->update(['status'=>2]);
     $notification=array(
            'massage'=>'Delivery Process Done Successfully',
            'alert-type'=>'success'
      );
           return Redirect()->route('admin.neworder')->with($notification); 
    } 


           public function DeliveryDone($id){
    DB::table('orders')->where('id',$id)->update(['status'=>3]);
     $notification=array(
            'massage'=>'Delivered Successfully',
            'alert-type'=>'success'
      );
           return Redirect()->route('admin.neworder')->with($notification); 
    }

    


    public function AcceptPayment(){
  $order = DB::table('orders')->where('status',1)->get();
  return view('admin.order.pending',compact('order')); 
  }


  public function CancelOrder(){
  $order = DB::table('orders')->where('status',4)->get();
  // dd($order);
  return view('admin.order.pending',compact('order')); 
  }


    public function ProcessPayment(){
  $order = DB::table('orders')->where('status',2)->get();
  // dd($order);
  return view('admin.order.pending',compact('order')); 
  }


   public function SuccessPayment(){
  $order = DB::table('orders')->where('status',3)->get();
  // dd($order);
  return view('admin.order.pending',compact('order')); 
  }






  


}
