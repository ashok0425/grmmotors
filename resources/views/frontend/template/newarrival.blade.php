
@php
$product=DB::table('products')->latest()->where('status',1)->limit(6)->get();
@endphp
@if (count($product))

    <section  class="padding-bottom-sm">
            <header class="section-heading heading-line">
                <h4 class="title-section text-uppercase">NEW ARRIVAL</h4>
            </header>

            <div class="row row-sm">
                @foreach ($product as $item)

           <div class="col-xl-m col-lg-2 col-md-3 col-6 col-sm-3 product_wrap mb-1">

                    <div class="card card-sm card-product-grid">

                        <a href="{{ route('product',['id'=>$item->id,'name'=>$item->name]) }}" class="img-wrap my-0 py-0"> <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"> </a>
                        <figcaption class="info-wrap d-flex justify-content-between">
                        <span>
                            <a href="{{ route('product',['id'=>$item->id,'name'=>$item->name]) }}" class="title">{{ $item->name }}</a>
                            {{-- <ul class="rating-stars my-0 py-0">
                                @php
                              $rev=DB::table('productreviews')->where('product_id',$item->id)->avg('rating');
                              $total=DB::table('productreviews')->where('product_id',$item->id)->get();
                          @endphp
                              <?php for($i=1;$i<=ceil($rev);$i++){ ?>
                                <span class="fa fa-star rstar" ></span>
                                <?php  }?>

                                <?php for($j=1;$j<=5-ceil($rev);$j++) {?>
                               <span class="fas fa-star dstar" ></span>
                                <?php  } ?>
                              </ul> --}}
                            <div class="price my-0 py-0"><span id="price">{{ __getPriceunit()}} </span>{{number_format($item->price_after_comission) }}</div> <!-- price-wrap.// -->

                        </span>


                        </figcaption>

                    </div>
                </div> <!-- col.// -->
                @endforeach

            </div> <!-- row.// -->
            </section>
@endif
