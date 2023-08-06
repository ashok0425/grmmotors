@extends('frontend.master')
@section('content')
	<!-- ========================= SECTION MAIN  ========================= -->


@include('frontend.template.banner')

@include('frontend.template.add')

@include('frontend.template.featured')
@include('frontend.template.add1')


@include('frontend.template.newarrival')
@include('frontend.template.add2')

@include('frontend.template.bestseller')
@include('frontend.template.add3')

@include('frontend.template.toprated')


<!-- container end.// -->
{{-- @include('frontend.template.add') --}}
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay:true,
	dots:true,
	responsiveClass:true,
    responsive:{
		0:{
            items:1
        },
        600:{
            items:6
        },
		1000:{
            items:9
        }
    }
});

</script>
@endpush
