@extends('welcome')

@section('content')
    @php
        $setting = DB::table('settings')->first();
        $charge = $setting->shipping_charge;
        $vat = $setting->vat;
    @endphp

    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/cart_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/cart_responsive.css') }}">
    <!-- Cart -->

    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart_title text-primary text-center">Have Any Coupon?</div>
                    <p class="text-success text-center">Have no coupon? just subscribe and collect your coupon!!!</p>
                    <!-- Coupon Section -->
                    <div class="row mt-4 g-3">
                        <div class="col-lg-6">
                            @if (Session::has('coupon'))
                                <div class="card border-success">
                                    <div class="card-header bg-success text-white">
                                        <i class="fas fa-tag mr-2"></i> Coupon Applied
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong>{{ Session::get('coupon')['name'] }}</strong>
                                                <p class="mb-0 text-muted">Discount:
                                                    ${{ Session::get('coupon')['discount'] }}</p>
                                            </div>
                                            <a href="{{ route('coupon.remove') }}" class="btn btn-outline-danger btn-sm">
                                                <i class="fas fa-times"></i> Remove
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-ticket-alt mr-2"></i> Apply Coupon
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="{{ route('apply.coupon') }}" class="form-inline">
                                            @csrf
                                            <div class="form-group mr-3 mb-2 flex-grow-1">
                                                <input type="text" name="coupon" class="form-control w-100"
                                                    placeholder="Enter coupon code" required>
                                            </div>
                                            <button type="submit" class="btn btn-danger mb-2">
                                                <i class="fas fa-check mr-2"></i>Apply
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-5 mt-lg-0 mt-md-0 mt-2">
                            <div class="card border-primary">
                                <div class="card-header bg-primary text-white">
                                    <i class="fas fa-receipt mr-2"></i> Order Summary
                                </div>
                                <ul class="list-group list-group-flush">
                                    @if (Session::has('coupon'))
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Subtotal
                                            <span>${{ Session::get('coupon')['balance'] }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Discount ({{ Session::get('coupon')['name'] }})
                                            <span class="text-danger">-${{ Session::get('coupon')['discount'] }}</span>
                                        </li>
                                    @else
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Subtotal
                                            <span>${{ Cart::subtotal() }}</span>
                                        </li>
                                    @endif

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Shipping
                                        <span>${{ $charge }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        VAT
                                        <span>${{ $vat }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center bg-light">
                                        <strong>Total</strong>
                                        <strong>
                                            ${{ Session::has('coupon')
                                                ? Session::get('coupon')['balance'] + $charge + $vat
                                                : Cart::subtotal() + $charge + $vat }}
                                        </strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart_buttons" style="margin-right: 90px;">
                <a href="{{ route('payment.step') }}" class="button cart_button_checkout">Continue</a>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


    <script src="{{ asset('public/frontend/js/cart_custom.js') }}"></script>
@endsection
