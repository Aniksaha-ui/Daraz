<!DOCTYPE html>
<html lang="en">

<head>
    <title>OneTech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('fontend/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('fontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/plugins/slick-1.8.0/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/blog_single_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/blog_single_responsive.css') }}">

</head>


<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">
            <div class="header_main">
                <div class="container">
                    <div class="row">

                        <!-- Search -->
                        <div style="display:none" class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input"
                                                placeholder="Search for products...">
                                            <div class="custom_dropdown">
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc">All Categories</span>
                                                    <i class="fas fa-chevron-down"></i>
                                                    <ul class="custom_list clc">
                                                        <li><a class="clc" href="#">All Categories</a></li>
                                                        <li><a class="clc" href="#">Computers</a></li>
                                                        <li><a class="clc" href="#">Laptops</a></li>
                                                        <li><a class="clc" href="#">Cameras</a></li>
                                                        <li><a class="clc" href="#">Hardware</a></li>
                                                        <li><a class="clc" href="#">Smartphones</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300"
                                                value="Submit"><img src="images/search.png" alt=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="main_nav_content d-flex flex-row">

                                <!-- Categories Menu -->
                                @php
                                    $category = DB::table('categories')->get();
                                @endphp
                                <div class="main_nav_content d-flex flex-row">

                                    <!-- Categories Menu -->

                                    {{-- <div class="cat_menu_container">
                                        <div
                                            class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                            <div class="cat_burger"><span></span><span></span><span></span></div>
                                            <div class="cat_menu_text">categories</div>
                                        </div>

                                        <ul class="cat_menu">

                                            @foreach ($category as $cat)
                                                <li class="hassubs">
                                                    <a href="{{ url('allcategory/' . $cat->id) }}">{{ $cat->category_name }}<i
                                                            class="fas fa-chevron-right"></i></a>
                                                    <ul>

                                                        @php
                                                            $subcategory = DB::table('subcategories')
                                                                ->where('category_id', $cat->id)
                                                                ->get();
                                                        @endphp

                                                        @foreach ($subcategory as $row)
                                                            <li class="hassubs">
                                                                <a
                                                                    href="{{ url('products/' . $row->id) }}">{{ $row->subcategory_name }}</a>

                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div> --}}

                                    <!-- Main Nav Menu -->

                                    <div class="main_nav_menu ml-auto">
                                        <ul class="standard_dropdown main_nav_dropdown">
                                            <li><a href={{ route('portfolio') }}>Portfolio<i
                                                        class="fas fa-chevron-down"></i></a></li>
                                            <li class="hassubs">
                                                <a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Menu Item<i
                                                                class="fas fa-chevron-down"></i></a>
                                                        <ul>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li class="hassubs">
                                                <a href="#">Featured Brands<i
                                                        class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Menu Item<i
                                                                class="fas fa-chevron-down"></i></a>
                                                        <ul>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                            <li><a href="#">Menu Item<i
                                                                        class="fas fa-chevron-down"></i></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li class="hassubs">
                                                <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="shop.html">Shop<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="product.html">Product<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="blog.html">cart<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="blog_single.html">Blog Post<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="regular.html">Regular Post<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="cart.html">Cart<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="contact.html">Contact<i
                                                                class="fas fa-chevron-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href={{ route('show.cart') }}>cart<i
                                                        class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Menu Trigger -->

                                    <div class="menu_trigger_container ml-auto">
                                        <div
                                            class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                            <div class="menu_burger">
                                                <div class="menu_trigger_text">menu</div>
                                                <div class="cat_burger menu_burger_inner">
                                                    <span></span><span></span><span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </nav>

            <!-- Menu -->

            <div class="page_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="page_menu_content">

                                <div class="page_menu_search">
                                    <form action="#">
                                        <input type="search" required="required" class="page_menu_search_input"
                                            placeholder="Search for products...">
                                    </form>
                                </div>
                                <ul class="page_menu_nav">
                                    <li class="page_menu_item has-children">
                                        <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">GBP British Pound<i
                                                        class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item">
                                        <a href={{ route('portfolio') }}>Portfolio<i class="fa fa-angle-down"></i></a>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                            <li class="page_menu_item has-children">
                                                <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                                <ul class="page_menu_selection">
                                                    <li><a href="#">Menu Item<i
                                                                class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fa fa-angle-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i
                                                                class="fa fa-angle-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item has-children">
                                        <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                        <ul class="page_menu_selection">
                                            <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="page_menu_item"><a href="blog.html">blog<i
                                                class="fa fa-angle-down"></i></a></li>
                                    <li class="page_menu_item"><a href="contact.html">contact<i
                                                class="fa fa-angle-down"></i></a></li>
                                </ul>

                                <div class="menu_contact">
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/phone_white.png"
                                                alt=""></div>+38 068 005 3570
                                    </div>
                                    <div class="menu_contact_item">
                                        <div class="menu_contact_icon"><img src="images/mail_white.png"
                                                alt=""></div><a
                                            href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        @yield('content')



        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 footer_col">
                        <div class="footer_column footer_contact">
                            <div class="logo_container">
                                <div class="logo"><a href={{ route('portfolio') }}> About Us</a></div>
                            </div>
                            <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae
                                veritatis aliquam
                                recusandae unde eveniet atque ullam magnam vel. Totam, asperiores?</p>
                        </div>
                    </div>

                    <div class="col-lg-4 footer_col">
                        <div class="footer_column footer_contact">
                            <div class="logo_container">
                                <div class="logo"><a href="#">Quick Links</a></div>
                            </div>
                            <p class="text-dark">Lorem, ipsum dolor.</p>
                            <p class="text-dark">Lorem, ipsum dolor.</p>
                            <p class="text-dark">Lorem, ipsum dolor.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 footer_col">
                        <div class="footer_column footer_contact">
                            <div class="logo_container">
                                <div class="logo"><a class="text-dark" href="#"> Fustan Empourium Ltd</a>
                                </div>
                            </div>
                            <div class="footer_title">Got Question? Call Us 24/7</div>
                            <div class="footer_phone">+01885140878</div>
                            <div class="footer_contact_text">
                                <p>Boro Bari, Asiruddin Sarak</p>
                                <p>West Khabashpur, Faridpur</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright -->


        <div class="d-flex align-items-center justify-content-center bg-dark p-lg-2 p-md-2 p-1">
            <p class="text-white text-center">Fustan Empourium Ltd- Developed By Infinity Codehub Ltd</p>

        </div>

    </div>



    <script src="{{ asset('fontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('fontend/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('fontend/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fontend/plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ asset('fontend/plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ asset('fontend/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('fontend/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ asset('fontend/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('fontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('fontend/plugins/slick-1.8.0/slick.js') }}"></script>
    <script src="{{ asset('fontend/plugins/easing/easing.js') }}"></script>

    <script src="{{ asset('fontend/js/custom.js') }}"></script>
    {{-- <script src="{{asset('fontend/js/cart_custom.js')}}"></script> --}}
</body>
