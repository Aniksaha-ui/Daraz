@extends('admin.admin_layout')

@section('admin_panel')

  
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Orders</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $today }}</h3>
              </div><!-- card-body -->
               
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $month }}</h3>
              </div><!-- card-body -->
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $year }}</h3>
              </div><!-- card-body -->
             
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today Delivered</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $delevery }} </h3>
              </div><!-- card-body -->
             
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

        <br><br>



  <div class="row row-sm">

          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Product</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">  {{ count($product)  }}</h3>
              </div><!-- card-body -->
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Brand</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">  {{ count($brand)  }}</h3>
              </div><!-- card-body -->
             
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total User</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">  {{ count($user)  }} </h3>
              </div><!-- card-body -->
             
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-transparent pd-20 bd-b bd-gray-200">
                <h6 class="card-title tx-uppercase tx-12 mg-b-0">Today's Transection History(Stripe)</h6>
              </div><!-- card-header -->
              <table class="table table-white table-responsive mg-b-0 tx-12">
                <thead>
                  <tr class="tx-10">
                  
                    <th class="pd-y-5">User Name</th>
                    <th class="pd-y-5">Payment Type</th>
                    <th class="pd-y-5">Payment Amount</th>
                    <th class="pd-y-5">Date</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($payment_history as $row)
                  <tr>
                    <td>
                      <a href="" class="tx-inverse tx-14 tx-medium d-block">{{$row->name}}</a>
                      <span class="tx-11 d-block" style="color: black;">{{$row->payment_id}}</span>
                    </td>
                    <td class="tx-12">
                      <span class="square-8 bg-pink mg-r-5 rounded-circle" style="color: black;"></span> Stripe
                    </td>
                    <td><b>{{$row->paying_amount}}</b></td>
                      <td style="color: black;">{{$row->date}}</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              <div class="card-footer tx-12 pd-y-15 bg-transparent bd-t bd-gray-200">
              
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="card">
              <div class="card-header pd-20 bg-transparent bd-b bd-gray-200">
                <h6 class="card-title tx-uppercase tx-12 mg-b-0">Product Purchases</h6>
              </div><!-- card-header -->
              <table id="datatable1" class="table table-white table-responsive mg-b-0 tx-12">
                <thead>
                  <tr class="tx-10">
              
                    <th class="pd-y-5">Item Name</th>
                    <th class="pd-y-5 tx-right">total Sold</th>
                    
                  </tr>
                </thead>

                <tbody>
                      @foreach($order_details as $row)
                  <tr>
                    <td>
                      <a href="" class="tx-inverse tx-14 tx-medium d-block">{{$row->product_name}}</a>
                        <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
                    </td>
                    <td class="valign-middle tx-right">{{$row->totalproduct}}</td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="card-footer tx-12 pd-y-15 bg-transparent bd-t bd-b-200">
                <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->


  
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->




   

@endsection