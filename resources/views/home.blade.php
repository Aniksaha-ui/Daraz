@extends('welcome')

@section('content')
    @php

    @endphp


    <div class="contact_form mt-5">
        <div class="container">
            <div class="row">
                <div class="col-8 card">
                    <h6 class="text-center text-primary mt-3">Payment Information</h6>
                    <table class="mt-5 table table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th scope="col">Product Name </th>
                                <th scope="col">Payment Type </th>
                                <th scope="col">Payment ID </th>
                                <th scope="col">Amount </th>
                                <th scope="col">Date </th>
                                <th scope="col">Status Code</th>
                                <th scope="col">Action </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td scope="col">{{ $order->product_name }}</td>
                                    <td scope="col">{{ $order->payment_type }}</td>
                                    <td scope="col">{{ $order->payment_id }}</td>
                                    <td scope="col">{{ $order->paying_amount }}</td>
                                    <td scope="col">{{ $order->date }}</td>

                                    <td scope="col">
                                        <!--    @if ($order->status == 0)
    <span class="badge badge-info">On Review</span>
@elseif($order->status == 1)
    <span class="badge badge-info">Payment Accept</span>
@elseif($order->status == 2)
    <span class="badge badge-warning">Progress</span>
@elseif($order->status == 4)
    <span class="badge badge-success">Cancle Order</span>
@else
    <span class="badge badge-danger">Delivered</span>
    @endif -->
                                        <span class="badge badge-info">{{ $order->status_code }}</span>

                                    </td>
                                    <td scope="col">
                                        <a href="{{ URL::to('customer/view/order/' . $order->id) }}"
                                            class="btn btn-sm btn-info"> View</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

                <div class="col-4">
                    <div class="card">
                        <img src="{{ asset('public/frontend/images/best_6.png') }}" class="card-img-top"
                            style="height: 90px; width: 90px; margin-left: 34%;">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>

                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"> <a href="#">Change Password</a> </li>
                            <li class="list-group-item">Edit Profile</li>
                            <li class="list-group-item"><a href="#"> Return Order</a> </li>
                        </ul>

                        <div class="card-body">
                            <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>
@endsection
