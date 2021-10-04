<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class categoryApiController extends Controller
{
    public function index(){

    	$category = DB::table('categories')
    				->get();
    	

    	return response()->json(['success'=>'true','category'=>$category],200);
    }
}
