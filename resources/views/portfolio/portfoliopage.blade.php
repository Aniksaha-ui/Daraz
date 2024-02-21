@extends('portfolio.portfoliomaster')
<style>
    .ourcompany {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 2%;
    }

    .responsiveWidth {
        display: block;
        height: auto;
        max-width: 100%;
    }

    @media only screen and (max-width: 576px) {
        .ourcompany {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-gap: 2%;
        }

        .responsiveWidth {
            display: block;
            height: auto;
            max-width: 100%;
        }


    }
</style>


@section('content')
    {{-- slider  --}}
    <div class="banner_2">
        <div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
        <div class="banner_2_container">
            <div class="banner_2_dots"></div>
            <!-- Banner 2 Slider -->

            <div class="owl-carousel owl-theme banner_2_slider">

                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">Laptops</div>
                                        <div class="banner_2_title">MacBook Air 13</div>
                                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Maecenas fermentum laoreet.</div>
                                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i>
                                        </div>
                                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="images/banner_2_product.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">Laptops</div>
                                        <div class="banner_2_title">MacBook Air 13</div>
                                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Maecenas fermentum laoreet.</div>
                                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i>
                                        </div>
                                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="images/banner_2_product.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Banner 2 Slider Item -->
                <div class="owl-item">
                    <div class="banner_2_item">
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col-lg-4 col-md-6 fill_height">
                                    <div class="banner_2_content">
                                        <div class="banner_2_category">Laptops</div>
                                        <div class="banner_2_title">MacBook Air 13</div>
                                        <div class="banner_2_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Maecenas fermentum laoreet.</div>
                                        <div class="rating_r rating_r_4 banner_2_rating"><i></i><i></i><i></i><i></i><i></i>
                                        </div>
                                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-6 fill_height">
                                    <div class="banner_2_image_container">
                                        <div class="banner_2_image"><img src="images/banner_2_product.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- slider  --}}

    {{-- company details  --}}
    <div class="single_post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div style="text-align: center;color:blue" class="single_post_title">Welcome to Fustan Empourium Ltd
                    </div>
                    <div class="single_post_text">
                        <p style="color:black"><b>TBA TEXT - Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Tempore,
                                eveniet est
                                praesentium iure quae numquam. Aliquam est recusandae dolor eveniet ipsa enim tempore quos
                                tenetur quam facilis voluptas praesentium voluptatibus quaerat fuga vitae, at earum aperiam
                                possimus fugiat cumque hic! Velit eum praesentium placeat veritatis modi ut esse non illo.
                        </p>

                        <div class="single_post_quote text-center">
                            <div class="quote_image"><img src="images/quote.png" alt=""></div>
                            <div style="color:black" class="quote_text">
                                <b> 📢আমরা রিসেলারদের পছন্দ মত কাস্টমাইজ টি-শার্ট এবং ব্র্যান্ডিং করে থকি।
                            </div>
                            <div class="quote_name">Sohag(Manageing Director)</div>
                        </div>

                        <p class="mt-3"><b>TBA TEXT - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore,
                                eveniet est
                                praesentium iure quae numquam. Aliquam est recusandae dolor eveniet ipsa enim tempore quos
                                tenetur quam facilis voluptas praesentium voluptatibus quaerat fuga vitae, at earum aperiam
                                possimus fugiat cumque hic! Velit eum praesentium placeat veritatis modi ut esse non illo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- company details end --}}

    {{-- our companies --}}
    <div style="background-image:url('https://media.istockphoto.com/id/1294603953/vector/abstract-black-stripes-diagonal-background.jpg?s=612x612&w=0&k=20&c=nQZHTk-o97cNVqWnUe8BJg0A5jQG0tqylquzbt9YtcQ=')"
        class=" container my-5 mx-auto p-5">
        <h3 class="d-flex align-items-center justify-content-center text-white">Our Companies</h3>
        <p class="d-flex align-items-center justify-content-center text-white">Lorem ipsum dolor sit amet consectetur,
            adipisicing
            elit. Nemo est in
            unde ipsa beatae voluptas reiciendis maxime
            itaque amet iure!</p>
        <div class="container">

            <div class="ourcompany">
                <div class="card p-4">
                    <div class="d-flex">
                        <img height="75" src="https://www.hameemgroup.net/images/services/woven-icon.png" alt="">
                        <p style="margin-left: 1em">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, enim?
                        </p>
                    </div>
                </div>
                <div class="card p-4">
                    <div class="d-flex">
                        <img height="75" src="https://www.hameemgroup.net/images/services/woven-icon.png" alt="">
                        <p style="margin-left: 1em">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, enim?
                        </p>
                    </div>
                </div>

                <div class="card p-4">
                    <div class="d-flex">
                        <img height="75" src="https://www.hameemgroup.net/images/services/woven-icon.png" alt="">
                        <p style="margin-left: 1em">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, enim?
                        </p>
                    </div>
                </div>

                <div class="card p-4">
                    <div class="d-flex">
                        <img height="75" src="https://www.hameemgroup.net/images/services/woven-icon.png"
                            alt="">
                        <p style="margin-left: 1em">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus,
                            enim?
                        </p>
                    </div>
                </div>


            </div>

        </div>
    </div>

    {{-- our clients  --}}
    <div style="background-image:url('https://w0.peakpx.com/wallpaper/91/270/HD-wallpaper-happy-faces-black-3d-abstract-cg.jpg')"
        class="container card">
        <h3 class="text-center text-white p-3">Our Clients</h3>
        <div class="w-100 p-5 mb-4">
            <img class="responsiveWidth" src="https://www.hameemgroup.net/images/OUR-BUYERS-NEW.png" alt="">
        </div>
    </div>
    {{-- our clients  --}}


    <div class="mt-5"></div>
    <div class="mt-5"></div>







    {{-- our companies --}}
@endsection
