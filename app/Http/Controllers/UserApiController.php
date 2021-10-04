<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserApiController extends Controller
{
    public function index(Request $Request){

    		$status = "false";

    		$email=$Request->email;
    		$password=$Request->password;
    	

    		$o_email=DB::table('users')->where('email',$email)->pluck('email')->first();
    		$o_password=DB::table('users')->where('email',$email)->where('password1',$password)->pluck('password1')->first();
    		
    		if($o_email && $o_password){
    				$status="true";
    				return Response()->json($status);
    		}
    		else{
    			$status="false";
    			return Response()->json($status);
    		}
    }
}
