<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FontEndController extends Controller
{
    public function StoreNewslater(Request $request){
    	$validateData = $request->validate([
     'email' => 'required|unique:newslaters|max:55',
    	]);

   $data = array();
   $data['email'] = $request->email;
   DB::table('newslaters')->insert($data);


        $notification=array(
            'massage'=>'Thanks For Subscribe',
            'alert-type'=>'success'
       );
           return Redirect()->back()->with($notification); 	

    }


     public function OrderTracking(Request $request){
  $code = $request->code;

  $track = DB::table('orders')->where('status_code',$code)->first();
  if ($track) {
    
  
    return view('pages.tracking',compact('track'));

  }else{
      $notification=array(
            'massage'=>'Invalid Status Code',
            'alert-type'=>'success'
      );

        return Redirect()->back()->with($notification);

  }



 }



    


}
