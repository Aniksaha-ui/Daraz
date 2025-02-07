@extends('welcome')

@section('content')
    <div class="contact_form py-5">
        <div class="container">
            <div class="row">

                <!-- Order Status Section -->
                <div class="col-lg-5 offset-lg-1 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h4><i class="fas fa-truck mr-2"></i>Your Order Status</h4>
                        </div>
                        <div class="card-body">
                            <div class="progress mb-3">
                                @if ($track->status == 0)
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                @elseif($track->status == 1)
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                @elseif($track->status == 2)
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                @elseif($track->status == 3)
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 15%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 35%"
                                        aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                @else
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                @endif
                            </div>

                            <h5 class="mt-4 text-center">
                                @if ($track->status == 0)
                                    <span class="text-warning">Your Order is Under Review</span>
                                @elseif($track->status == 1)
                                    <span class="text-info">Payment Accepted, Under Process</span>
                                @elseif($track->status == 2)
                                    <span class="text-primary">Packing Done, Handover Process</span>
                                @elseif($track->status == 3)
                                    <span class="text-success">Order Complete</span>
                                @else
                                    <span class="text-danger">Order Cancelled</span>
                                @endif
                            </h5>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4 text-right">
                            <a href="/home" class="btn btn-secondary"><i class="fas fa-arrow-left mr-2"></i>Back to
                                dashboard</a>
                        </div>
                    </div>
                </div>

                <!-- Order Details Section -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="card shadow-sm">
                        <div class="card-header bg-secondary text-white">
                            <h4><i class="fas fa-info-circle mr-2"></i>Your Order Details</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Payment Type:</b> {{ $track->payment_type }}</li>
                                <li class="list-group-item"><b>Transaction ID:</b> {{ $track->payment_id }}</li>
                                <li class="list-group-item"><b>Balance ID:</b> {{ $track->blnc_transection }}</li>
                                <li class="list-group-item"><b>Subtotal:</b> ${{ number_format($track->subtotal, 2) }}</li>
                                <li class="list-group-item"><b>Shipping:</b> ${{ number_format($track->shipping, 2) }}</li>
                                <li class="list-group-item"><b>VAT:</b> ${{ number_format($track->vat, 2) }}</li>
                                <li class="list-group-item"><b>Total:</b> ${{ number_format($track->total, 2) }}</li>
                                <li class="list-group-item"><b>Month:</b> {{ $track->month }}</li>
                                <li class="list-group-item"><b>Date:</b> {{ $track->date }}</li>
                                <li class="list-group-item"><b>Year:</b> {{ $track->year }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Back Button Section -->

        </div>
    </div>
@endsection
