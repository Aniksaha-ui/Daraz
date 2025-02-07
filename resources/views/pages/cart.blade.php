@extends('welcome')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/cart_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend/styles/cart_responsive.css') }}">
    <!-- Cart -->

    <div class="cart_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart_container p-4 border rounded shadow-sm bg-white">
                        <h3 class="text-center mb-4">Shopping Cart</h3>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $row)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($row->options->image) }}" class="img-fluid rounded"
                                                    style="width: 70px; height: 70px;">
                                            </td>
                                            <td>{{ $row->name }}</td>
                                            <td>
                                                @if ($row->options->color)
                                                    {{ $row->options->color }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                @if ($row->options->size)
                                                    {{ $row->options->size }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                <form method="post" action="{{ route('update.cartitem') }}"
                                                    class="d-flex align-items-center justify-content-center">
                                                    @csrf
                                                    <input type="hidden" name="productid" value="{{ $row->rowId }}">
                                                    <input type="number" name="qty" value="{{ $row->qty }}"
                                                        class="form-control text-center" style="width: 60px;">
                                                    <button type="submit" class="btn btn-success btn-sm ms-2">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>${{ $row->price }}</td>
                                            <td><strong>${{ $row->price * $row->qty }}</strong></td>
                                            <td>
                                                <a href="{{ url('remove/cart/' . $row->rowId) }}"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Grand Total</td>
                                        <td>${{ Cart::subtotal() ?? 0 }}</td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- Order Total -->

                        <!-- Cart Buttons -->
                        @if (Cart::subtotal() > 0)
                            <div class="cart_buttons mt-4 d-flex justify-content-between">
                                <button type="button" class="btn btn-danger">All Cancel</button>
                                <a href="{{ route('user.checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('public/frontend/js/cart_custom.js') }}"></script>
@endsection
