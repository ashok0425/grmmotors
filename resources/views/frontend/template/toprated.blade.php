@php
         $product=DB::table('products')->where('products.status',1)->where('top_rated',1)->limit(6)->get();
        @endphp

@if (count($product))

    <section  class="padding-bottom-sm">
            <header class="section-heading heading-line">
                <h4 class="title-section text-uppercase">TOP RATED ITEM</h4>
            </header>

            <div class="newarrival owl-carousel owl-theme">
                @foreach ($product as $item)

                    <div class="card card-sm card-product-grid mx-1">

                        <a href="{{ route('product',['id'=>$item->id,'name'=>$item->name]) }}" class="img-wrap my-0 py-0 text-center d-flex mx-auto"> <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"> </a>
                        <figcaption class="info-wrap d-flex justify-content-between">
                        <span>
                            <a href="{{ route('product',['id'=>$item->id,'name'=>$item->name]) }}" class="title">{{ $item->name }}</a>

                            <div class="price my-0 py-0"><span id="price">{{ __getPriceunit()}} </span>{{number_format($item->price_after_comission) }}</div> <!-- price-wrap.// -->

                        </span>


                        </figcaption>

                    </div>
                @endforeach

            </div> <!-- row.// -->
            </section>
@endif


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
<script>
    $('.newarrival').owlCarousel({
    loop:true,
    autoplay:true,
	nav:true,
    dots:false,
	responsiveClass:true,
    responsive:{
		0:{
            items:2
        },
        600:{
            items:3
        },
		1000:{
            items:6
        }
    }
});

</script>
@endpush

