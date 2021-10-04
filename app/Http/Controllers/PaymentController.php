<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Cart;
use App\products;

class PaymentController extends Controller
{
    public function Payment(Request $request){

    	$data=array();
    	$data['name'] = $request->name;
    	$data['phone'] = $request->phone;
    	$data['email'] = $request->email;
    	$data['address'] = $request->address;
    	$data['city'] = $request->city;
    	$data['payment'] = $request->payment;



    	
    	if($request->payment == "stripe"){


    		return view('pages.payment.stripe',compact('data'));

    	}elseif ($request->payment == "cashondelivery") {
			     return view('pages.payment.oncash',compact('data'));   		
    	}else{

    		 echo "Not ready Now";
    	}


    }


    public function StripeCharge(Request $request){


				\Stripe\Stripe::setApiKey('sk_test_GMS0jjvLk2re1yoEMGVEhV93005SfVYUgU');


				$token = $_POST['stripeToken'];

				$charge = \Stripe\Charge::create([
				  'amount' => $request->total*100,
				  'currency' => 'usd',
				  'description' => 'XIXOTECH Details',
				  'source' => $token,
				  'metadata' => ['order_id' => uniqid()],
				]);
            //payment is ok
            //Insert data to order table

			 $data=array();
             $data['user_id']= Auth::id();
             $data['payment_id']=$charge->payment_method;
             $data['paying_amount']=$charge->amount/100;
             $data['payment_type']=$request->payment_type;;
             $data['blnc_transection']=$charge->balance_transaction;
             $data['stripe_order_id']=$charge->metadata->order_id;
             $data['shipping']=$request->shipping;
             $data['vat']=$request->vat;
             $data['total']=$request->total;
           if(session::has('coupon')){
            $data['subtotal'] = Session::get('coupon')['balance'];
           }
           else{
            $data['subtotal']=Cart::Subtotal();
           }

           $data['status'] = 0;
           $data['status_code']=mt_rand(100000,999999);
           $data['date'] = date('d-m-y');
           $data['month']=date('F');
           $data['year']=date('Y');

           $order_id=DB::table('orders')->insertGetId($data);
         
           //Insert Data to order table finished


           $shipping=array();
           $shipping['order_id']=$order_id;
           $shipping['ship_name']=$request->ship_name;
           $shipping['ship_email']=$request->ship_email;
           $shipping['ship_phone']=$request->ship_phone;
           $shipping['ship_address']=$request->ship_address;
           $shipping['ship_city']=$request->ship_city;
           DB::table('shipping')->insert($shipping);

           //Insert Product Details

           $content=Cart::content();
           $details=array();
           foreach ($content as $row) {
               $details['order_id']=$order_id;
               $details['product_id']=$row->id;
               $details['product_name']=$row->name;
               $details['color']=$row->options->color;
               $details['size']=$row->options->size;
               $details['quantity']=$row->qty;
               $details['singleprice']=$row->price;
               $details['totalprice']=$row->qty*$row->price;
               $details['order_id']=$order_id;
               DB::table('order_details')->insert($details);

               products::findOrfail($row->id)->decrement('product_quantity',$row->qty);


           }


           //delete all form cart

           Cart::destroy();
           if(session::has('coupon')){
            session::forget('coupon');
           }

           $notification=array(
                        'massage'=>'Payment Successfully done!Thanks for your shopping',
                        'alert-type'=>'success'
                  );
           return Redirect()->to('/')->with($notification);
    }




       public function OnCash(Request $request){


            //payment is ok
            //Insert data to order table

       $data=array();
             $data['user_id']= Auth::id();
             $data['payment_type']=$request->payment_type;;
             $data['shipping']=$request->shipping;
             $data['vat']=$request->vat;
             $data['total']=$request->total;
           if(session::has('coupon')){
            $data['subtotal'] = Session::get('coupon')['balance'];
           }
           else{
            $data['subtotal']=Cart::Subtotal();
           }

           $data['status'] = 0;
           $data['status_code']=mt_rand(100000,999999);
           $data['date'] = date('d-m-y');
           $data['month']=date('F');
           $data['year']=date('Y');

           $order_id=DB::table('orders')->insertGetId($data);
         
           //Insert Data to order table finished


           $shipping=array();
           $shipping['order_id']=$order_id;
           $shipping['ship_name']=$request->ship_name;
           $shipping['ship_email']=$request->ship_email;
           $shipping['ship_phone']=$request->ship_phone;
           $shipping['ship_address']=$request->ship_address;
           $shipping['ship_city']=$request->ship_city;
           DB::table('shipping')->insert($shipping);

           //Insert Product Details

           $content=Cart::content();
           $details=array();
           foreach ($content as $row) {
               $details['order_id']=$order_id;
               $details['product_id']=$row->id;
               $details['product_name']=$row->name;
               $details['color']=$row->options->color;
               $details['size']=$row->options->size;
               $details['quantity']=$row->qty;
               $details['singleprice']=$row->price;
               $details['totalprice']=$row->qty*$row->price;
               $details['order_id']=$order_id;
               DB::table('order_details')->insert($details);
              products::findOrfail($row->id)->decrement('product_quantity',$row->qty);
           }


           //delete all form cart

           Cart::destroy();
           if(session::has('coupon')){
            session::forget('coupon');
           }

           $notification=array(
                        'massage'=>'Payment Successfully done!Thanks for your shopping',
                        'alert-type'=>'success'
                  );
           return Redirect()->to('/')->with($notification);
    }
}
