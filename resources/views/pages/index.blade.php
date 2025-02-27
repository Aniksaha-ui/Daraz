@extends('portfolio.master')


@section('content')
    @php
        $slider = DB::table('products')
            ->join('brands', 'products.brand_id', 'brands.id')
            ->where('main_slider', 1)
            ->select('products.*', 'brands.brand_name')
            ->first();
    @endphp



    <div class="banner">
        <div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src={{ asset($slider->image_one) }} alt="" style="height:400px">
                </div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text">{{ $slider->product_name }}</h1>
                        @if ($slider->discount_price == null)
                            <div class="banner_price">${{ $slider->selling_price }}</div>
                        @else
                            <div class="banner_price">
                                <span>${{ $slider->selling_price }}</span>${{ $slider->discount_price }}</div>
                        @endif

                        <div class="banner_product_name">{{ $slider->brand_name }}</div>
                        <div class="button banner_button"><a
                                href="{{ url('product/details/' . $slider->id . '/' . $slider->product_name) }}">Show Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @php

        $feature = DB::table('products')->where('status', 1)->orderBy('id', 'desc')->limit(20)->get();
        $trand = DB::table('products')->where('status', 1)->where('trend', 1)->orderBy('id', 'desc')->limit(20)->get();
        $best_rated = DB::table('products')
            ->where('status', 1)
            ->where('best_rated', 1)
            ->orderBy('id', 'desc')
            ->limit(20)
            ->get();
        $hot = DB::table('products')
            ->join('brands', 'products.brand_id', 'brands.id')
            ->where('products.status', 1)
            ->where('products.hot_deal', 1)
            ->orderBy('products.id', 'desc')
            ->limit(5)
            ->get();

        $hot_new = DB::table('products')
            ->where('products.status', 1)
            ->where('products.hot_new', 1)
            ->orderBy('products.id', 'desc')
            ->limit(20)
            ->get();

    @endphp


    <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('fontend/images/char_1.png') }}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('fontend/images/char_2.png') }}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('fontend/images/char_3.png') }}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>

                <!-- Char. Item -->
                <div class="col-lg-3 col-md-6 char_col">

                    <div class="char_item d-flex flex-row align-items-center justify-content-start">
                        <div class="char_icon"><img src="{{ asset('fontend/images/char_4.png') }}" alt=""></div>
                        <div class="char_content">
                            <div class="char_title">Free Delivery</div>
                            <div class="char_subtitle">from $50</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deals of the week -->

    <div class="deals_featured">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!--Hot Deals -->

                    <div class="deals">
                        <div class="deals_title">Deals of the Week</div>
                        <div class="deals_slider_container">

                            <!-- Deals Slider -->
                            <div class="owl-carousel owl-theme deals_slider">
                                @foreach ($hot as $row)
                                    <!-- Deals Item -->
                                    <div class="owl-item deals_item">
                                        <div class="deals_image"><img src="{{ asset($row->image_one) }}" alt="">
                                        </div>
                                        <div class="deals_content">
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_category"><a
                                                        href="#">{{ $row->brand_name }}</a></div>
                                                @if ($row->discount_price == null)
                                                @else
                                                    <div class="deals_item_price ml-auto">${{ $row->selling_price }}</div>
                                                @endif
                                            </div>
                                            <div class="deals_info_line d-flex flex-row justify-content-start">
                                                <div class="deals_item_name">{{ $row->product_name }}</div>
                                                @if ($row->discount_price == null)
                                                    <div class="deals_item_price ml-auto">${{ $row->selling_price }}</div>
                                                @else
                                                @endif

                                                @if ($row->discount_price != null)
                                                    <div class="deals_item_price ml-auto">${{ $row->discount_price }}</div>
                                                @else
                                                @endif


                                            </div>
                                            <div class="available">
                                                <div class="available_line d-flex flex-row justify-content-start">
                                                    <div class="available_title">Available:
                                                        <span>{{ $row->product_quantity }}</span></div>
                                                    <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                            <div
                                                class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                                <div class="deals_timer_title_container">
                                                    <div class="deals_timer_title">Hurry Up</div>
                                                    <div class="deals_timer_subtitle">Offer ends in:</div>
                                                </div>
                                                <div class="deals_timer_content ml-auto">
                                                    <div class="deals_timer_box clearfix" data-target-time="">
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                            <span>hours</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                            <span>mins</span>
                                                        </div>
                                                        <div class="deals_timer_unit">
                                                            <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                            <span>secs</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>

                        <div class="deals_slider_nav_container">
                            <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i>
                            </div>
                            <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i>
                            </div>
                        </div>
                    </div>

                    <!--Hot Deals End -->

                    <!-- Featured -->
                    <div class="featured">
                        <div class="tabbed_container">
                            <div class="tabs">
                                <ul class="clearfix">
                                    <li class="active">Featured</li>

                                </ul>
                                <div class="tabs_line"><span></span></div>
                            </div>

                            <!-- Feature Panel -->
                            <div class="product_panel panel active">
                                <div class="featured_slider slider">


                                    @foreach ($feature as $row)
                                        <!-- Product Show -->
                                        <div class="featured_slider_item">
                                            <div class="border_active"></div>
                                            <div
                                                class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div
                                                    class="product_image d-flex flex-column align-items-center justify-content-center">
                                                    <a
                                                        href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}"><img
                                                            src="{{ asset($row->image_one) }}"
                                                            style="height: 120px; width: 140px;" alt=""></a></div>
                                                <div class="product_content">

                                                    @if ($row->discount_price == null)
                                                        <div class="product_price">${{ $row->selling_price }}</div>
                                                    @else
                                                        <div class="product_price">
                                                            ${{ $row->selling_price }}<span>${{ $row->discount_price }}</span>
                                                        </div>
                                                    @endif


                                                    <div class="product_name">
                                                        <div><a
                                                                href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">{{ $row->product_name }}</a>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="product_extras">
                                                       
                                                        <button  class="product_cart_button addcart" data-id="{{ $row->id }}" data-toggle="modal" data-target="#cartmodal" onclick="productview(this.id)">Add to Cart</button>
                                                    </div> -->


                                                    <div class="product_extras">

                                                        <button id="{{ $row->id }}"
                                                            class="product_cart_button addcart" data-toggle="modal"
                                                            data-target="#cartmodal" onclick="productview(this.id)">Add to
                                                            Cart</button>
                                                    </div>
                                                </div>


                                                <button class="addwishlist" data-id="{{ $row->id }}">
                                                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                </button>


                                                <ul class="product_marks">

                                                    @if ($row->discount_price == null)
                                                        <li class="product_mark product_new">new</li>
                                                    @else
                                                        <li class="product_mark product_new">
                                                            @php
                                                                $amount = $row->selling_price - $row->discount_price;
                                                                $discount = ($amount / $row->selling_price) * 100;
                                                            @endphp

                                                            {{ intval($discount) }}%

                                                        </li>
                                                    @endif


                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="featured_slider_dots_cover"></div>
                            </div>









                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popular Categories -->

    <div class="popular_categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="popular_categories_content">
                        <div class="popular_categories_title">Popular Categories</div>
                        <div class="popular_categories_slider_nav">
                            <div class="popular_categories_prev popular_categories_nav"><i
                                    class="fas fa-angle-left ml-auto"></i></div>
                            <div class="popular_categories_next popular_categories_nav"><i
                                    class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                        <div class="popular_categories_link"><a href="#">full catalog</a></div>
                    </div>
                </div>

                <!-- Popular Categories Slider -->

                <div class="col-lg-9">
                    <div class="popular_categories_slider_container">
                        <div class="owl-carousel owl-theme popular_categories_slider">

                            @php
                                $category = DB::table('categories')->get();
                            @endphp

                            @foreach ($category as $cat)
                                <!-- Popular Categories Item -->
                                <div class="owl-item">
                                    <div
                                        class="popular_category d-flex flex-column align-items-center justify-content-center">
                                        <div class="popular_category_image"><img
                                                src="{{ asset('fontend/images/popular_1.png') }}" alt=""></div>
                                        <div class="popular_category_text">{{ $cat->category_name }}</div>
                                    </div>
                                </div>
                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Mid Slider -->

    <div class="banner_2">
        <div class="banner_2_background"
            style="background-image:url({{ asset('fontend/images/banner_2_background.jpg') }}"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->

            <div class="owl-carousel owl-theme banner_2_slider">

                <!-- Banner 2 Slider Item -->

                @php
                    $mid = DB::table('products')
                        ->join('brands', 'products.brand_id', 'brands.id')
                        ->join('categories', 'products.category_id', 'categories.id')
                        ->select('products.*', 'brands.brand_name', 'categories.category_name')
                        ->where('products.mid_slider', 1)
                        ->orderBy('id', 'desc')
                        ->limit(5)
                        ->get();
                @endphp

                @foreach ($mid as $mid)
                    <div class="owl-item">
                        <div class="banner_2_item">
                            <div class="container fill_height">
                                <div class="row fill_height">
                                    <div class="col-lg-4 col-md-6 fill_height">
                                        <div class="banner_2_content">
                                            <div class="banner_2_category">
                                                <h4>{{ $mid->category_name }}</h4>
                                            </div>
                                            <div class="banner_2_title">{{ $mid->product_name }}</div>
                                            <div class="banner_2_text">
                                                <h4>{{ $mid->brand_name }}</h4> <br> {{ $row->selling_price }}
                                            </div>
                                            <div class="rating_r rating_r_4 banner_2_rating">
                                                <i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="button banner_2_button"><a
                                                    href="{{ url('product/details/' . $mid->id . '/' . $mid->product_name) }}">Explore</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-8 col-md-6 fill_height">
                                        <div class="banner_2_image_container">
                                            <div class="banner_2_image"><img src="{{ asset($mid->image_one) }}"
                                                    alt=""
                                                    style="height: 400px;
                                        width: 350px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

    <!-- Hot New Category One-->


    @php
        $cats = DB::table('categories')->skip(1)->first();
        $catid = $cats->id;

        $product = DB::table('products')
            ->where('category_id', $catid)
            ->where('status', 1)
            ->limit(10)
            ->orderBy('id', 'DESC')
            ->get();

    @endphp

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">{{ $cats->category_name }}</div>
                            <ul class="clearfix">
                                <li class="active"> </li>

                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">

                                        @foreach ($product as $row)
                                            <!-- Slider Item -->
                                            <div class="featured_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <a
                                                            href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}"><img
                                                                src="{{ asset($row->image_one) }}" alt=""
                                                                style="height: 120px; width: 100px;"></a></div>
                                                    <div class="product_content">

                                                        @if ($row->discount_price == null)
                                                            <div class="product_price discount">
                                                                ${{ $row->selling_price }}<span> </div>
                                                        @else
                                                            <div class="product_price discount">
                                                                ${{ $row->discount_price }}<span>${{ $row->selling_price }}</span>
                                                            </div>
                                                        @endif



                                                        <div class="product_name">
                                                            <div><a
                                                                    href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">{{ $row->product_name }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_extras">

                                                            <button class="product_cart_button addcart1"
                                                                data-id="{{ $row->id }}" data-toggle="modal"
                                                                data-target="#cartmodal"
                                                                onclick="productview(this.id)">Add to Cart</button>
                                                        </div>
                                                    </div>


                                                    <button class="addwishlist" data-id="{{ $row->id }}">
                                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    </button>


                                                    <ul class="product_marks">
                                                        @if ($row->discount_price == null)
                                                            <li class="product_mark product_discount"
                                                                style="background: blue;">New</li>
                                                        @else
                                                            <li class="product_mark product_discount">
                                                                @php
                                                                    $amount =
                                                                        $row->selling_price - $row->discount_price;
                                                                    $discount = ($amount / $row->selling_price) * 100;

                                                                @endphp

                                                                {{ intval($discount) }}%

                                                            </li>
                                                        @endif



                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Hot New Category anthor-->


    @php
        $cats = DB::table('categories')->skip(0)->first();
        $catid = $cats->id;

        $product = DB::table('products')
            ->where('category_id', $catid)
            ->where('status', 1)
            ->limit(10)
            ->orderBy('id', 'DESC')
            ->get();

    @endphp

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">{{ $cats->category_name }}</div>
                            <ul class="clearfix">
                                <li class="active"> </li>

                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">

                                        @foreach ($product as $row)
                                            <!-- Slider Item -->
                                            <div class="featured_slider_item">
                                                <div class="border_active"></div>
                                                <div
                                                    class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                    <div
                                                        class="product_image d-flex flex-column align-items-center justify-content-center">
                                                        <a
                                                            href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}"><img
                                                                src="{{ asset($row->image_one) }}" alt=""
                                                                style="height: 120px; width: 100px;"></a></div>
                                                    <div class="product_content">

                                                        @if ($row->discount_price == null)
                                                            <div class="product_price discount">
                                                                ${{ $row->selling_price }}<span> </div>
                                                        @else
                                                            <div class="product_price discount">
                                                                ${{ $row->discount_price }}<span>${{ $row->selling_price }}</span>
                                                            </div>
                                                        @endif



                                                        <div class="product_name">
                                                            <div><a
                                                                    href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">{{ $row->product_name }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_extras">
                                                            <div class="product_color">
                                                                <input type="radio" checked name="product_color"
                                                                    style="background:#b19c83">
                                                                <input type="radio" name="product_color"
                                                                    style="background:#000000">
                                                                <input type="radio" name="product_color"
                                                                    style="background:#999999">
                                                            </div>
                                                            <button class="product_cart_button addcart1"
                                                                data-id="{{ $row->id }}">Add to Cart</button>
                                                        </div>
                                                    </div>


                                                    <button class="addwishlist" data-id="{{ $row->id }}">
                                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                                    </button>


                                                    <ul class="product_marks">
                                                        @if ($row->discount_price == null)
                                                            <li class="product_mark product_discount"
                                                                style="background: blue;">New</li>
                                                        @else
                                                            <li class="product_mark product_discount">
                                                                @php
                                                                    $amount =
                                                                        $row->selling_price - $row->discount_price;
                                                                    $discount = ($amount / $row->selling_price) * 100;

                                                                @endphp

                                                                {{ intval($discount) }}%

                                                            </li>
                                                        @endif



                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <div class="featured_slider_dots_cover"></div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Hot New Category anthor-->

    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Hot New Product</div>
                            <ul class="clearfix">
                                <li class="active">Top 20</li>

                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <div class="bestsellers_panel panel active">

                            <!-- Best Sellers Slider -->

                            <div class="bestsellers_slider slider">

                                <!-- Best Sellers Item -->

                                @foreach ($hot_new as $row)
                                    <div class="bestsellers_item discount">
                                        <div
                                            class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
                                            <div class="bestsellers_image"><img src="{{ asset($row->image_one) }}"
                                                    alt=""></div>
                                            <div class="bestsellers_content">
                                                <div class="bestsellers_category"><a href="#">Hot Item</a></div>
                                                <div class="bestsellers_name"><a
                                                        href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">{{ $row->product_name }}</a>
                                                </div>
                                                @if ($row->discount_price != null)
                                                    <div class="bestsellers_price discount">
                                                        ${{ $row->discount_price }}<span>${{ $row->selling_price }}</span>
                                                    </div>
                                                @else
                                                    <div class="bestsellers_price discount">${{ $row->selling_price }}
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                        <button class="addwishlist" data-id="{{ $row->id }}">
                                            <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
                                        </button>
                                        <ul class="bestsellers_marks">


                                        </ul>
                                    </div>
                                @endforeach
                                <!-- Best Sellers Item -->


                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Adverts -->

    <div class="adverts">
        <div class="container">
            <div class="row">

                @foreach ($trand as $row)
                    <div class="col-lg-4 advert_col">

                        <!-- Advert Item -->



                        <div class="advert d-flex flex-row align-items-center justify-content-start">
                            <div class="advert_content">
                                <div class="advert_title"><a
                                        href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">Trends
                                        2021</a></div>
                                <div class="advert_text">{{ $row->product_name }}
                                </div>

                            </div>
                            <div class="ml-auto">
                                <div class="advert_image"><img src="{{ asset($row->image_one) }}" height="50%"
                                        width="40%" alt=""></div>
                            </div>
                        </div>


                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Trends -->

    <div class="trends">
        <div class="trends_background"
            style="background-image:url({{ asset('public/frontend/images/trends_background.jpg') }})"></div>
        <div class="trends_overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Trends Content -->
                <div class="col-lg-3">
                    <div class="trends_container">
                        <h2 class="trends_title">Buy One Get One</h2>
                        <div class="trends_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
                        </div>
                        <div class="trends_slider_nav">
                            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
                            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
                        </div>
                    </div>
                </div>


                @php
                    $buyget = DB::table('products')
                        ->join('brands', 'products.brand_id', 'brands.id')
                        ->select('products.*', 'brands.brand_name')
                        ->where('status', 1)
                        ->where('buyone_getone', 1)
                        ->orderBy('id', 'DESC')
                        ->limit(6)
                        ->get();

                @endphp

                <!-- Trends Slider -->
                <div class="col-lg-9">
                    <div class="trends_slider_container">

                        <!-- Trends Slider -->

                        <div class="owl-carousel owl-theme trends_slider">
                            @foreach ($buyget as $row)
                                <!-- Trends Slider Item -->
                                <div class="owl-item">
                                    <div class="trends_item is_new">
                                        <div
                                            class="trends_image d-flex flex-column align-items-center justify-content-center">
                                            <img src="{{ asset($row->image_one) }}" alt=""></div>
                                        <div class="trends_content">
                                            <div class="trends_category"><a href="#">{{ $row->brand_name }}</a>
                                            </div>
                                            <div class="trends_info clearfix">
                                                <div class="trends_name"><a
                                                        href="{{ url('product/details/' . $row->id . '/' . $row->product_name) }}">{{ $row->product_name }}</a>
                                                </div>


                                                @if ($row->discount_price == null)
                                                    <div class="product_price discount">${{ $row->selling_price }}<span>
                                                    </div>
                                                @else
                                                    <div class="product_price discount">
                                                        ${{ $row->discount_price }}<span>${{ $row->selling_price }}</span>
                                                    </div>
                                                @endif

                                                <!-- <a href="" class="btn btn-danger btn-sm">Add to Cart</a> -->
                                            </div>
                                        </div>
                                        <ul class="trends_marks">

                                            <li class="trends_mark trends_new">BuyGet</li>
                                        </ul>
                                        <button class="addwishlist" data-id="{{ $row->id }}">
                                            <div class="trends_fav"><i class="fas fa-heart"></i></div>
                                        </button>

                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Reviews -->



    <!-- Recently Viewed -->



    <!-- Brands -->

    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">

                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">

                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('fontend/images/brands_1.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('fontend/images/brands_2.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('fontend/images/brands_3.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('fontend/images/brands_4.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('fontend/images/brands_5.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('fontend/images/brands_6.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('fontend/images/brands_7.jpg') }}" alt=""></div>
                            </div>
                            <div class="owl-item">
                                <div class="brands_item d-flex flex-column justify-content-center"><img
                                        src="{{ asset('fontend/images/brands_8.jpg') }}" alt=""></div>
                            </div>

                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div
                        class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="{{ asset('fontend/images/send.png') }}"
                                    alt=""></div>
                            <div class="newsletter_title">Sign up for Newsletter</div>
                            <div class="newsletter_text">
                                <p>...and receive %20 coupon for first shopping.</p>
                            </div>
                        </div>
                        <div class="newsletter_content clearfix">
                            <form action="{{ route('store.newslater') }}" method="post" class="newsletter_form">
                                @csrf
                                <input type="email" class="newsletter_input" required="required"
                                    placeholder="Enter your email address" name="email">
                                <button class="newsletter_button" type="submit">Subscribe</button>
                            </form>
                            <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="cartmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLavel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLavel">Product Quick View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="" id="pimage" style="height: 220px; width: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title text-center" id="pname"> </h5>

                                </div>

                            </div>

                        </div>


                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item">Product Code:<span id="pcode"></span> </li>
                                <li class="list-group-item">Category: <span id="pcat"></span></li>
                                <li class="list-group-item">Subcategory: <span id="psub"></span></li>
                                <li class="list-group-item">Brand:<span id="pbrand"></span> </li>
                                <li class="list-group-item">Stock: <span class="badge"
                                        style="background: green;color: white;"> Available</span> </li>
                            </ul>

                        </div>

                        <div class="col-md-4">

                            <form method="post" action="{{ route('insert.into.cart') }}">
                                @csrf

                                <input type="hidden" name="product_id" id="product_id">

                                <div class="form-group">
                                    <label for="exampleInputcolor">Color</label>
                                    <select name="color" class="form-control" id="color">

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputcolor">Size</label>
                                    <select name="size" class="form-control" id="size">

                                    </select>

                                </div>


                                <div class="form-group">
                                    <label for="exampleInputcolor">Quantity</label>
                                    <input type="number" class="form-control" name="qty" value="1">
                                </div>


                                <button type="submit" class="btn btn-primary">Add to Cart </button>

                            </form>

                        </div>



                    </div>
                </div>




                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>



    <script type="text/javascript">
        function productview(id) {
            $.ajax({
                url: "{{ url('/cart/product/view/') }}/" + id,
                type: "GET",
                dataType: "json",
                //eikhane data paiteci cart/product/view takhe(data hisebe paiteci)
                success: function(data) {
                    $('#pcode').text(data.product.product_code);
                    $('#pcat').text(data.product.category_name);
                    $('#psub').text(data.product.subcategory_name);
                    $('#pbrand').text(data.product.brand_name);
                    $('#pname').text(data.product.product_name);
                    $('#pimage').attr('src', data.product.image_one);
                    $('#product_id').val(data.product.id);

                    var d = $('select[name="color"]').empty();
                    $.each(data.color, function(key, value) {
                        $('select[name="color"]').append('<option value="' + value + '">' + value +
                            '</option>');
                    });

                    var d = $('select[name="size"]').empty();
                    $.each(data.size, function(key, value) {
                        $('select[name="size"]').append('<option value="' + value + '">' + value +
                            '</option>');
                    });


                }
            })
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.addcart1').on('click', function() {
                var id = $(this).data('id');
                // alert(id);
                if (id) {
                    $.ajax({
                        url: " {{ url('add/to/cart') }}/" + id,
                        type: "GET",
                        datType: "json",
                        success: function(data) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                onOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal
                                        .stopTimer)
                                    toast.addEventListener('mouseleave', Swal
                                        .resumeTimer)
                                }
                            })

                            if ($.isEmptyObject(data.error)) {

                                Toast.fire({
                                    icon: 'success',
                                    title: data.success
                                })
                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: data.error
                                })
                            }


                        },
                    });

                } else {
                    alert('danger');
                }
            });

        });
    </script>




    <script type="text/javascript">
        $(document).ready(function() {
            $('.addwishlist').on('click', function() {
                var id = $(this).data('id');
                if (id) {
                    $.ajax({
                        url: " {{ url('add/wishlist/') }}/" + id,
                        type: "GET",
                        datType: "json",
                        success: function(data) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                onOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal
                                        .stopTimer)
                                    toast.addEventListener('mouseleave', Swal
                                        .resumeTimer)
                                }
                            })

                            if ($.isEmptyObject(data.error)) {

                                Toast.fire({
                                    icon: 'success',
                                    title: data.success
                                })
                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: data.error
                                })
                            }


                        },
                    });

                } else {
                    alert('danger');
                }
            });

        });
    </script>
@endsection
