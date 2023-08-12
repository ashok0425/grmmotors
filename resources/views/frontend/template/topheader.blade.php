<style>
	.icon-area .fas{
        color: #002658!important;
    }
	.header{
		transition: all .5s ease-in-out;
	}
	.widget-header .text{
		overflow: visible!important;
	}
    .dropdown-menu{
        box-shadow: none!important;
        border-radius:2px;
    }
  </style>

@php
	$setting=DB::table('websites')->first();
	$category=DB::table('categories')->where('status',1)->get();
@endphp
<div class="header">
<section class="header-main border-bottom ">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-2 col-lg-3 col-md-12 text-center text-md-left">
				<a href="{{ route('/') }}" class="brand-wrap">
					<img  src="{{ asset($setting->image) }}" class="img-fluid" width="120">
				</a> <!-- brand-wrap.// -->
			</div>
			<div class="col-xl-5 col-lg-4 offset-md-1 col-md-6 ">
				<form action="{{ route('store.search') }}" class="search-header" >

					<div class="input-group w-100 ">
						{{-- <select class="custom-select border-right " id="category" name="category_name">
								<option value="">All type</option>
								@foreach ($category as $item)
								<option value="{{ $item->id }}">{{ $item->category}}</option>

								@endforeach

						</select> --}}
					    <input type="search" class="form-control" placeholder="Search" id="search" autocomplete="off" name="search">

					    <div class="input-group-append">
					      <button class="btn btn-primary " type="submit">
					        <i class="fa fa-search"></i> Search
					      </button>
					    </div>
				    </div>
				</form> <!-- search-wrap .end// -->
				<div class="search_result"></div>
			</div> <!-- col.// -->
			<div class="col-xl-4 col-lg-4 col-md-4 text-right">


                    <div class="widget-header  d-md-none">
                        @guest

						<a href="{{route('login')}}" class="widget-view" >
							<div class="icon-area">

								<i class="fas fa-user"></i>



						</div>

							<small class="text">  Login</small>
						</a>
                        @else


                        @if (Auth::user()->Isvendor==1)
                        <a href="{{route('vendor.dashboard')}}" class="widget-view" >
							<div class="icon-area">

								<i class="fas fa-user"></i>
						</div>

							<small class="text"> Profile</small>
						</a>
                              @else

                        <a href="{{route('profile')}}" class="widget-view">
							<div class="icon-area">

								<i class="fas fa-user"></i>
						</div>

							<small class="text"> Profile</small>
						</a>
                          @endif


                        @endguest
					</div>
					<div class="widget-header ">
						<a href="{{ route('wishlist') }}" class="widget-view">
							<div class="icon-area">

								<i class="fas fa-heart"></i>

							@guest

							@else
							@php
								$wish=DB::table('wishlists')->where('user_id',Auth::user()->id)->get()
							@endphp

								<span class="notify">{{ count($wish) }}</span>
							@endguest
						</div>

							<small class="text">  Wishlist </small>
						</a>
					</div>
					<div class="widget-header ">
						<a href="{{ route('cart') }}" class="widget-view">
							<div class="icon-area">

							<i class="fas fa-shopping-cart"></i>

							@guest

							@else
							@php
								$cart=DB::table('carts')->where('user_id',Auth::user()->id)->where('buynow','!=',1)->get()
							@endphp
								<span class="notify">{{ count($cart) }}</span>
							@endguest
						</div>

							<small class="text"> Cart </small>
						</a>
					</div>

					<div class="widget-header d-none d-sm-inline">
						<a href="#" class="widget-view" data-target="#exampleModal" data-toggle="modal">
							<div class="icon-area">
								<i class="fas fa-store "></i>
							</div>
							<small class="text"> Order Tracking </small>
						</a>
					</div>
				</div> <!-- widgets-wrap.// -->
			</div> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- container.// -->
</section>



	<nav class="navbar navbar-main navbar-expand-lg border-bottom bg-info text-white">
		<div class="container">
			<button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fas fa-bars  "></span>
			</button>

			<div class="collapse navbar-collapse" id="main_nav">

			<ul class="navbar-nav">

					@php
					$category=DB::table('categories')->where('status',1)->orderBy('id','desc')->get();
				  @endphp
				  @foreach ($category as $item)
				  @php
				  $sub=DB::table('subcategories')->where('category_id',$item->id)->where('status',1)->orderBy('id','desc')->get();
			  @endphp
					  <li @if (count($sub)>0)
						class="nav-item dropdown"
						@else  class="nav-item "
					  @endif>


					  <a href="{{ route('store.category',['id'=>$item->id,'name'=>$item->category]) }}" class="nav-link text-white">{{ $item->category}}
						@if (count($sub)>0)
						<i class="fas fa-chervon-down"></i>
					@endif
					</a>
					  @if (count($sub)>0)
					  <div class="dropdown-menu ">

						 @foreach ($sub as $subitem)
						<div class="p-2 border-bottom"><a href="{{ route('store.subcategory',['id'=>$subitem->id,'name'=>$subitem->subcategory]) }}">{{ $subitem->subcategory }}</a></div>

						 @endforeach

					</div>
					@endif
					</li>

				  @endforeach

		  </ul>

			@guest
			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item">
				<a class="nav-link text-white" href="{{ route('login') }}">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white" href="{{ route('register') }}">Register</a>
			</li>
			</ul>
				@else
				<ul class="navbar-nav ml-md-auto">
					<li class="nav-item">

					<a class="nav-link text-white" href="{{ route('profile') }}">Profile</a>

				</li>
				<li class="nav-item">
					<a class="nav-link text-white" href="{{ route('logout') }}">Logout</a>
				</li>
				</ul>
			@endguest

			</div> <!-- collapse .// -->

		</div> <!-- container .// -->
		</nav>
	</div> <!-- header-main .// -->



@push('scripts')
<script>

const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
if (this.matchMedia("(min-width: 768px)").matches) {
$dropdown.hover(
function() {
const $this = $(this);
$this.addClass(showClass);
$this.find($dropdownToggle).attr("aria-expanded", "true");
$this.find($dropdownMenu).addClass(showClass);
},
function() {
const $this = $(this);
$this.removeClass(showClass);
$this.find($dropdownToggle).attr("aria-expanded", "false");
$this.find($dropdownMenu).removeClass(showClass);
}
);
} else {
$dropdown.off("mouseenter mouseleave");
}
});

// if(window.innerWidth>=1000){
// $(window).scroll(function(){
// 	$('.m ').css('display','block')

// $('.header ').addClass('nav-fix')


// // $('.header ').css('top','-200px')

// // if($(window).scrollTop()>=300){
// // $('.header ').css('top','0px')

// // $('.header ').addClass('nav-fix')
// // }else{
// // $('.header ').css('top','0px')

// // $('.header ').removeClass('nav-fix')

// // }
// })
// }


</script>
@endpush

