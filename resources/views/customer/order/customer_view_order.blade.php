@extends('welcome')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/cart_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/cart_responsive.css') }}">

    {{-- <div class="cart_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="cart_container">
						<div class="cart_title">Shopping Cart</div>
						<div class="cart_items">
							<ul class="cart_list">
								<li class="cart_item clearfix">
									<div class="cart_item_image"><img src="images/shopping_cart.jpg" alt=""></div>
									<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
										<div class="cart_item_name cart_info_col">
											<div class="cart_item_title">Name</div>
											<div class="cart_item_text">MacBook Air 13</div>
										</div>
										<div class="cart_item_color cart_info_col">
											<div class="cart_item_title">Color</div>
											<div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
										</div>
										<div class="cart_item_quantity cart_info_col">
											<div class="cart_item_title">Quantity</div>
											<div class="cart_item_text">1</div>
										</div>
										<div class="cart_item_price cart_info_col">
											<div class="cart_item_title">Price</div>
											<div class="cart_item_text">$2000</div>
										</div>
										<div class="cart_item_total cart_info_col">
											<div class="cart_item_title">Total</div>
											<div class="cart_item_text">$2000</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						
						<!-- Order Total -->
						<div class="order_total">
							<div class="order_total_content text-md-right">
								<div class="order_total_title">Order Total:</div>
								<div class="order_total_amount">$2000</div>
							</div>
						</div>

						<div class="cart_buttons">
							<button type="button" class="button cart_button_clear">Add to Cart</button>
							<button type="button" class="button cart_button_checkout">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
    <style>
        .invoice {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            border-bottom: 2px solid #007bff;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .invoice-footer {
            border-top: 2px solid #007bff;
            padding-top: 15px;
            text-align: center;
            font-size: 14px;
        }
    </style>

    <div class="container">
        <div class="invoice">
            <!-- Invoice Header -->
            <div class="invoice-header d-flex justify-content-between">
                <div>
                    <h2>Infinitycodehub LTD</h2>
                    <p>South Bonosree, Dhaka, Bangladesh</p>
                    <p>Email: sahaanik1045@gmail.com | Phone: +01628781323</p>
                </div>
                <div>
                    <h5>Invoice #{{ $order->stripe_order_id }}</h5>
                    <p>Date: <strong>{{ $order->date }}</strong></p>
                </div>
            </div>

            <!-- Invoice Details -->
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h5>Billed To:</h5>
                    <p><strong>{{ $order->name }}</strong><br>
                        South Bonosree, Dhaka<br>
                        Email: {{$order->email}}</p>
                </div>
                <div class="col-sm-6 text-sm-end">
                    <h5>Payment Method:{{$order->payment_type}}</h5>
                    <p>Bank Transfer<br>Account: 1234567890</p>
                </div>
            </div>

            <!-- Invoice Table -->
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th class="text-end">Quantity</th>
                        <th class="text-end">Unit Price</th>
                        <th class="text-end">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Website Development</td>
                        <td class="text-end">1</td>
                        <td class="text-end">$1000.00</td>
                        <td class="text-end">$1000.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>SEO Services</td>
                        <td class="text-end">2</td>
                        <td class="text-end">$200.00</td>
                        <td class="text-end">$400.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-end"><strong>Subtotal:</strong></td>
                        <td class="text-end">$1400.00</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-end"><strong>Tax (5%):</strong></td>
                        <td class="text-end">$70.00</td>
                    </tr>
                    <tr class="table-warning">
                        <td colspan="4" class="text-end"><strong>Grand Total:</strong></td>
                        <td class="text-end"><strong>$1470.00</strong></td>
                    </tr>
                </tfoot>
            </table>

            <!-- Footer -->
            <div class="invoice-footer mt-4">
                <p><strong>Thank you for your business!</strong></p>
                <p>For inquiries, contact support@company.com</p>
            </div>
        </div>
    </div>
@endsection
