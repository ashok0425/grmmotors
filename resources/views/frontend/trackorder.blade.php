@extends('frontend.master')
@section('content')
    <!-- Banner -->

@php 


@endphp 

<div class="contact_form">
	<div class="container">
		<div class="row  m-5">
 
  <div class="col-5 offset-lg-1">
   <div class="contact_form_title"> <h4> Your Order Status </h4></div>


   <div class="progress">
 
    @if($track->status == 0)
<div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>

   @elseif($track->status == 1)
  <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>

  <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

  @elseif($track->status == 2)
  <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  
  <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

  <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

  @elseif($track->status == 3)
  <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>

  <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

  <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

  <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>

    @else

  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
    @endif
  
</div><br>

 @if($track->status == 0)
 <h4>Note : Your Order are Under Review  </h4>

 @elseif($track->status == 1)
  <h4>Note : Payment Accept Under Process  </h4>

   @elseif($track->status == 2)
  <h4>Note : Packing Done Handover Process  </h4>

  @elseif($track->status == 3)
  <h4>Note : Order Complete  </h4>

 @else

 <h4>Note : Order Cancel  </h4>

 @endif




  </div>









  <div class="col-5 offset-lg-1">
   <div class="contact_form_title"><h4> Your Order Details</h4> </div>
 
  <ul class="list-group col-lg-12">
  	<li class="list-group-item"> <b>Payment Type:</b> {{ $track->payment_type  }} </li>
  	<li class="list-group-item"> <b>Transection ID:</b> {{ $track->payment_id  }}</li>
  	<li class="list-group-item"> <b>Cart value:</b>Rs. {{ $track->cart_value  }}</li>

  	<li class="list-group-item"> <b>Shipping:</b>Rs. {{ $track->shipping_charge  }}</li>
  	<li class="list-group-item"> <b>Vat:</b> {{ $track->tax  }}%</li>
  	<li class="list-group-item"> <b>Subtotal:</b>Rs. {{ $track->total  }}</li>

  	<li class="list-group-item"> <b>Total:</b>Rs. {{ $track->total  }}</li>
  
  	 

  	
  </ul>

  	
  </div>



			
		</div>
		
	</div>
	
</div>









 
@endsection