@extends('portfolio.portfoliomaster')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgb(35, 127, 133) !important;
        /* Change to desired color */
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
    <div class="banner_2" style="margin-top: -20px">
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
                                <div class="col-lg-4 col-md-6 col-12 fill_height">
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
                                <div class="col-lg-8 col-md-6 col-12 fill_height">
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
                                <div class="col-lg-4 col-md-6 col-12 fill_height">
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
                                <div class="col-lg-8 col-md-6 col-12 fill_height">
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
                                <div class="col-lg-4 col-md-6 col-12 fill_height">
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
                                <div class="col-lg-8 col-md-6 col-12 fill_height">
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
                        <img height="75" src="https://www.hameemgroup.net/images/services/woven-icon.png"
                            alt="">
                        <p style="margin-left: 1em">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus,
                            enim?
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


    {{-- why us  --}}
    <h3 class="text-center text-primary mb-5">Why Choose Us?</h3>
    <div class="container mt-5 mb-5">
        <div class="row gx-3 gy-3">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3 class="text-center">Our Strength</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <p class="list-group-item">An item</p>
                        <p class="list-group-item">A second item</p>
                        <p class="list-group-item">A third item</p>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3 class="text-center">Our Strength</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <p class="list-group-item">An item</p>
                        <p class="list-group-item">A second item</p>
                        <p class="list-group-item">A third item</p>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3 class="text-center">Our Strength</h3>
                    </div>
                    <ul class="list-group list-group-flush">
                        <p class="list-group-item">An item</p>
                        <p class="list-group-item">A second item</p>
                        <p class="list-group-item">A third item</p>
                    </ul>
                </div>
            </div>
        </div>



    </div>
    {{-- why us  --}}


    {{-- our clients  --}}
    <div style="background-image:url('https://w0.peakpx.com/wallpaper/91/270/HD-wallpaper-happy-faces-black-3d-abstract-cg.jpg')"
        class="container card">
        <h3 class="text-center text-white p-3">Our Clients</h3>
        <div class="w-100 p-5 mb-4">
            <img class="responsiveWidth" src="https://www.hameemgroup.net/images/OUR-BUYERS-NEW.png" alt="">
        </div>
    </div>
    {{-- our clients  --}}


    {{-- Achivement  --}}
    <h3 class="text-primary text-center mt-5">Our Achivement</h3>
    <div class="container mt-2 p-5" style="background-image:url(images/banner_2_background.jpg)">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <img class="responsiveWidth"
                                    src="https://www.undip.ac.id/wp-content/uploads/2024/02/Sabna-Lulusan-Undip-Berprestasi-Make-it-happen-shock-everyone-1-1-1080x675.jpg"
                                    class="d-block w-100" alt="..." />
                            </div>

                            <div class="col-lg-4">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nulla obcaecati, quasi
                                    beatae
                                    sit
                                    quas nobis. Esse, accusantium. Voluptatibus distinctio pariatur inventore est aut
                                    fugiat,
                                    nulla
                                    unde mollitia a non nemo fugit obcaecati. Quos officiis asperiores, eveniet tempore
                                    harum
                                    voluptatum.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row gx-5">
                            <div class="col-lg-7">
                                <img class="responsiveWidth"
                                    src="https://www.undip.ac.id/wp-content/uploads/2024/02/Sabna-Lulusan-Undip-Berprestasi-Make-it-happen-shock-everyone-1-1-1080x675.jpg"
                                    class="d-block w-100" alt="..." />
                            </div>

                            <div class="col-lg-5">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit nulla obcaecati, quasi
                                    beatae
                                    sit
                                    quas nobis. Esse, accusantium. Voluptatibus distinctio pariatur inventore est aut
                                    fugiat,
                                    nulla
                                    unde mollitia a non nemo fugit obcaecati. Quos officiis asperiores, eveniet tempore
                                    harum
                                    voluptatum.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- Achivement  --}}

    <div class="mt-5"></div>
    <div class="mt-5"></div>

    {{-- our companies --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
