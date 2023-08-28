
@php
$banner=DB::table('advertisments')->where('status',1)->skip(4)->first();
$banne1=DB::table('advertisments')->where('status',1)->skip(5)->first();

@endphp
@if ($banner)
   <div class="container-fluid">
    <div class="row">
        <div class="col-6 my-1">
            <img src="{{asset($banner->image)}}" alt="" class="w-100" style="height:200px;">
        </div>
        <div class="col-6 my-1">
            <img src="{{asset($banner1->image)}}" alt="" class="w-100" style="height:200px;">
        </div>
    </div>
   </div>
  @endif
