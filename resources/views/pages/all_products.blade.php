@extends('portfolio.master')


@section('content')


<link rel="stylesheet" type="text/css" href="{{asset('fontend/styles/shop_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('fontend/styles/shop_responsive.css')}}">

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Subcategory Product</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				

				<div class="col-lg-12">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>{{$count->count}}</span> products found</div>
						</div>

						<div class="product_grid row">
							<div class="product_grid_border"></div>

                     @foreach($products as $pro)
							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($pro->image_one) }}" alt="" style="height: 100px; width: 100px;"></div>
								<div class="product_content">
									
					  @if($pro->discount_price == NULL)
<div class="product_price discount">${{ $pro->selling_price }}<span> </div>
      @else
<div class="product_price discount">${{ $pro->discount_price }}<span>${{ $pro->selling_price }}</span></div>
      @endif				

 <div class="product_name"><div><a href="{{ url('product/details/'.$pro->id.'/'.$pro->product_name) }}" tabindex="0">{{ $pro->product_name  }} </a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								

								 <ul class="product_marks">
       @if($pro->discount_price == NULL)
       <li class="product_mark product_new" style="background: blue;">New</li>
       @else
                       <li class="product_mark product_new" style="background: red;">
                       @php
                         $amount = $pro->selling_price - $pro->discount_price;
                         $discount = $amount/$pro->selling_price*100;

                       @endphp
                       
                       {{ intval($discount) }}%

                      </li>  
                        @endif     
            </ul> 
							</div>
                          @endforeach

						</div>

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							 
							 
                               {{ $products->links() }}
							  
							 
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>




@endsection