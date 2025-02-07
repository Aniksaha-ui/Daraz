@extends('welcome')

@section('content')
    @php
        $setting = DB::table('settings')->first();
        $charge = $setting->shipping_charge;
        $vat = $setting->vat;
        $user = DB::table('users')->where('id', Auth::id())->first();

    @endphp

    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/contact_responsive.css') }}">

    <div class="contact_form">
        <div class="container">
            <div class="row g-4">
                <!-- Cart Products Section -->
                <div class="col-lg-7 mx-auto">
                    <div class="border p-4 rounded shadow-sm bg-white">
                        <h4 class="text-center text-primary mb-4">Billing Preview</h4>

                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h6>Customer Information</h6>
                                <p>Name: {{ $user->name }}</p>
                                <p>Email: {{ $user->email }}</p>
                                <p>Phone: {{ $user->phone ?? '' }}</p>
                            </div>
                            <div class="text-end">
                                <h6>Invoice No: #INV12345</h6>
                                <p>Date: {{ date('d M, Y') }}</p>
                            </div>
                        </div>

                        <table class="table table-bordered">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Qty</th>
                                    <th>Unit Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($cart as $row)
                                    <tr>
                                        <td><img src="{{ asset($row->options->image) }}" class="img-fluid rounded"
                                                style="max-width: 50px;" alt=""></td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->options->color ?? 'N/A' }}</td>
                                        <td>{{ $row->options->size ?? 'N/A' }}</td>
                                        <td>{{ $row->qty }}</td>
                                        <td>${{ $row->price }}</td>
                                        <td><strong>${{ $row->price * $row->qty }}</strong></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-end">
                            <ul class="list-group w-50">
                                @if (Session::has('coupon'))
                                    <li class="list-group-item">Subtotal: <span
                                            class="float-end">${{ Session::get('coupon')['balance'] }}</span></li>
                                    <li class="list-group-item">Coupon ({{ Session::get('coupon')['name'] }}): <span
                                            class="float-end">-${{ Session::get('coupon')['discount'] }}</span></li>
                                @else
                                    <li class="list-group-item">Subtotal: <span
                                            class="float-end">${{ Cart::Subtotal() }}</span></li>
                                @endif
                                <li class="list-group-item">Shipping Charge: <span
                                        class="float-end">${{ $charge }}</span></li>
                                <li class="list-group-item">VAT: <span class="float-end">${{ $vat }}</span></li>
                                <li class="list-group-item fw-bold">Total: <span class="float-end">
                                        @if (Session::has('coupon'))
                                            ${{ Session::get('coupon')['balance'] + $charge + $vat }}
                                        @else
                                            ${{ Cart::Subtotal() + $charge + $vat }}
                                        @endif
                                    </span></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- Shipping Address Section -->
                <div class="col-lg-5">
                    <div class="border p-4 rounded shadow-sm bg-white">
                        <h4 class="text-center mb-4">Shipping Address</h4>
                        <form action="{{ route('payment.process') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Your Email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Enter Your Address"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="city" placeholder="Enter Your City"
                                    required>
                            </div>
                            <h5 class="text-center mb-3">Payment Method</h5>
                            <div class="d-flex justify-content-around">
                                <label class="form-check-label">
                                    <input type="radio" name="payment" value="stripe">
                                    <img src="{{ asset('fontend/images/stripe.png') }}" class="img-fluid"
                                        style="max-width: 80px;">
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="payment" value="paypal">
                                    <img src="{{ asset('fontend/images/paypal.png') }}" class="img-fluid"
                                        style="max-width: 80px;">
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" name="payment" value="cashondelivery">
                                    <img src="{{ asset('fontend/images/cashondelivery.png') }}" class="img-fluid"
                                        style="max-width: 80px;">
                                </label>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-info w-100">Pay Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
