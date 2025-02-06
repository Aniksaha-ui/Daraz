<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $slider = DB::table('products')
            ->join('brands', 'products.brand_id', 'brands.id')
            ->where('main_slider', 1)
            ->select('products.*', 'brands.brand_name')
            ->first();


            $feature = DB::table('products')->where('status', 1)->orderBy('id', 'desc')->limit(20)->get();

            $trand = DB::table('products')->where('status', 1)->where('trend', 1)->orderBy('id', 'desc')->limit(20)->get();

            $best_rated = DB::table('products')
                ->where('status', 1)
                ->where('best_rated', 1)
                ->orderBy('id', 'desc')
                ->limit(20)
                ->get();


                // Fetch hot deals
                $hot = DB::table('products')
                    ->leftJoin('brands', 'products.brand_id', '=', 'brands.id') // Use LEFT JOIN to prevent missing records if brand is null
                    ->where('products.status', 1)
                    ->where('products.hot_deal', 1)
                    ->select([
                        'products.id', 
                        DB::raw('COALESCE(brands.brand_name, "Unknown Brand") as brand_name'), // Handle null brand names
                        'products.product_name', 
                        'products.image_one', 
                        'products.selling_price', 
                        'products.discount_price', 
                        'products.product_quantity'
                    ])
                    ->orderBy('products.id', 'desc')
                    ->limit(5)
                    ->get();
                
                // Fetch hot new products
                $hot_new = DB::table('products')
                    ->where('products.status', 1)
                    ->where('products.hot_new', 1)
                    ->select([
                        'id', 
                        'product_name', 
                        'image_one', 
                        'selling_price', 
                        'discount_price'
                    ])
                    ->orderBy('id', 'desc')
                    ->limit(20)
                    ->get();

                    $mid = DB::table('products')
                    ->join('brands', 'products.brand_id', 'brands.id')
                    ->join('categories', 'products.category_id', 'categories.id')
                    ->select('products.*', 'brands.brand_name', 'categories.category_name')
                    ->where('products.mid_slider', 1)
                    ->orderBy('id', 'desc')
                    ->limit(5)
                    ->get();
                
    
                $feature = $feature ?? collect(); // null execption
                $trand = $trand ?? collect();
                $best_rated = $best_rated ?? collect();
                $hot = $hot ?? collect();
                $hot_new = $hot_new ?? collect();
                $mid = $mid ?? collect();


                $characteristics = [
                    ['icon' => 'char_1.png', 'title' => 'Free Delivery', 'subtitle' => 'from $50'],
                    ['icon' => 'char_2.png', 'title' => 'Secure Payment', 'subtitle' => '100% secure'],
                    ['icon' => 'char_3.png', 'title' => 'Premium Quality', 'subtitle' => 'Best products'],
                    ['icon' => 'char_4.png', 'title' => '24/7 Support', 'subtitle' => 'Always available'],
                ];

            return view('pages.index',compact('slider','feature','trand','best_rated','hot','hot_new','characteristics'));


    }
}
