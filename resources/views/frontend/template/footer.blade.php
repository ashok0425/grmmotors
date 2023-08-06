
<style>
	footer .fab,footer .fas{
		font-size: 1.8rem;
	}

</style>
@php
    $set=DB::table('websites')->first();
@endphp
{{-- get button  --}}
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "580097572666574", // Facebook page ID
            whatsapp: "9813519397", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->


<footer class="section-footer bg-secondary">
	<div class="container">
		<section class="footer-top padding-y-lg text-white pl-md-5">
			<div class="row">
                <aside class="col-md-3 col-6">
					<h6 class="title">FastshopNepal</h6>
					<ul class="list-unstyled">
						<li class="my-3"><i class="fas fa-map-marker-alt "></i>&nbsp;&nbsp;&nbsp; {{$set->address1}}</li>
						<li class="my-3"><i class="fas fa-envelope "></i> <a href="mailto:{{$set->email1}}">&nbsp; {{$set->email1}}</a></li>
						<li class="my-3"><i class="fas fa-phone"></i>  <a href="tel:{{$set->phone1}}">&nbsp; {{$set->phone1}}</a></li>


					</ul>
				</aside>
				<aside class="col-md-2 col-6">
					<h6 class="title">About us</h6>
					<ul class="list-unstyled">
						<li> <a href="{{ route('about') }}">About </a></li>
						<li> <a href="{{ route('privacy') }}">Policies</a></li>
						<li> <a href="{{ route('price') }}">Price & Payment </a></li>
						<li> <a href="{{ route('term') }}">Terms of Use </a></li>

						{{-- <li> <a href="{{ route('faq') }}">faq </a></li> --}}

					</ul>
				</aside>
					<aside class="col-md-2 col-6">
					<h6 class="title">Quick Links</h6>
					<ul class="list-unstyled">
						<li> <a href="{{ route('profile') }}"> Profile </a></li>


						<li> <a href="{{ route('blog',['id'=>1,'name'=>'category_blog']) }}">Blog</a></li>
						<li> <a href="{{ route('store.category',['id'=>1,'name'=>'allproduct']) }}">Store</a></li>
						<li> <a href="{{ route('contact') }}">Contact</a></li>

					</ul>
				</aside>
				<aside class="col-md-2 col-6">
					<h6 class="title">Account</h6>
					<ul class="list-unstyled">
						<li> <a href="{{ route('login') }}">  Login </a></li>
						<li> <a href="{{ route('register') }}">  Register </a></li>
						<li> <a href="{{ route('cart') }}">  Cart </a></li>

						<li> <a href="{{ route('wishlist') }}"> My Wishlist </a></li>
						<li> <a href="{{ route('order') }}"> My Orders </a></li>

					</ul>
				</aside>
				@php
					$social=DB::table('websites')->first();
				@endphp
				<aside class="col-md-3">
					<h6 class="title  ">Follow us</h6>
					<ul class="list-unstyled  ">

						<li class="my-3 "><a href="{{ $social->instagram1 }}" target="_blank" class="d-flex align-items-center"> <i class="fab fa-instagram"></i> &nbsp;&nbsp; Instagram </a></li>
						<li class="my-3"><a href="{{ $social->facebook1 }}" target="_blank" class="d-flex align-items-center"> <i class="fab fa-facebook"></i> &nbsp;&nbsp; Facebook</a></li>
						<li class="my-3"><a href="{{ $social->twitter1 }}" target="_blank" class="d-flex align-items-center"> <i class="fab fa-twitter"></i> &nbsp;&nbsp; Twitter </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom text-center">

				<p class="text-muted"> &copy {{date('Y')}} FastshopNepal. All Rights Reserved.

				</p>
				<br>
		</section>
	</div><!-- //container -->
</footer>
