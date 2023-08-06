<style>

</style>
<section class="section-main padding-y px-0 mx-0">
    <h6 class="bg-blue text-center text-white mb-0 p-2">Popular Category</h6>

    @php
$category=DB::table('categories')->where('status',1)->InRandomOrder()->get();
@endphp
<div class="owl-carousel mt-3  category owl-theme " id='owlcarousel'>
    @foreach ($category as $item)
    <div class="text-center"><a href="{{ route('store.category',['id'=>$item->id,'name'=>$item->category]) }}"> <img src="{{ asset($item->image) }} " alt="{{ $item->category }}" >
    <p>
        {{ $item->category }} </p></div>
    </a>
    @endforeach

  </div>
  </section>
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
<script>
    $('#owlcarousel').owlCarousel({
    loop:true,
    autoplay:true,
	dots:true,
	responsiveClass:true,
    stagePadding:50,
    responsive:{
		0:{
            items:1
        },
        600:{
            items:6
        },
		1000:{
            items:12
        }
    }
});

</script>
@endpush
