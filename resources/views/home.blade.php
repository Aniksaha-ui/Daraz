@extends('welcome')

@section('content')
   
@php
    $order=DB::table('orders')->where('user_id',Auth::id())->orderBy('id','DESC')->limit(10)->get();
@endphp


<div class="contact_form">
  <div class="container"> 
    <div class="row">
      <div class="col-8 card">
        <table class="table table-response">
          <thead>
            <tr>
              <th scope="col">Payment Type </th>
              <th scope="col">Payment ID </th>
              <th scope="col">Amount </th>
              <th scope="col">Date </th>
              <th scope="col">Status Code</th>
              <th scope="col">Action </th>

            </tr>
          </thead>
          <tbody>
       @foreach($order as $row)
            <tr>
              <td scope="col">{{$row->payment_type}}</td>
              <td scope="col">{{$row->payment_id}}</td>
              <td scope="col">{{$row->paying_amount}}</td>
              <td scope="col">{{$row->date}}</td>

               <td scope="col">
             <!--    @if($row->status == 0)
                    <span class="badge badge-info">On Review</span>
                @elseif($row->status == 1)
                   <span class="badge badge-info">Payment Accept</span>
              @elseif($row->status == 2)
                  <span class="badge badge-warning">Progress</span>
               @elseif($row->status == 4)
                 <span class="badge badge-success">Cancle Order</span>
              @else
                <span class="badge badge-danger">Delivered</span>
              @endif -->
               <span class="badge badge-info">{{$row->status_code}}</span>

             </td>
              <td scope="col">
             <a href="{{ URL::to('customer/view/order/'.$row->id) }}" class="btn btn-sm btn-info"> View</a>
              </td>
            </tr>
        @endforeach   

          </tbody>
          
        </table>
        
      </div>

      <div class="col-4">
        <div class="card">
          <img src="{{ asset('public/frontend/images/best_6.png') }}" class="card-img-top" style="height: 90px; width: 90px; margin-left: 34%;">
          <div class="card-body">
            <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
            
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"> <a href="#">Change Password</a>  </li>
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
