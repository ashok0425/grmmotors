
@php
$banner=DB::table('advertisments')->where('status',1)->skip(3)->first();
@endphp
@if ($banner)
   <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <img src="{{asset($banner->image)}}" alt="" class="w-100" style="height:200px;">
        </div>
    </div>
   </div>
  @endif
