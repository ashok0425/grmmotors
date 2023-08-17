
<div class="container">
  <section class="section-main padding-y">
    <main class="card">
      <div class="card-body p-md-0 m-md-0">

    <div class="row ">
      {{-- <aside class=" col-md-3 flex-lg-grow-0 ">
        <nav class="nav-home-aside py-3 pl-3">
          <h6 class="title-category">MY MARKETS <i class="d-md-none icon fa fa-chevron-down"></i></h6>
          <ul class="menu-category">
            @php
					$category=DB::table('categories')->where('status',1)->orderBy('id','desc')->get();
				  @endphp
       @foreach ($category as $item)
       @php
       $sub=DB::table('subcategories')->where('category_id',$item->id)->where('status',1)->orderBy('id','desc')->get();
     @endphp
       <li @if (count($sub)>0)
        class="has-submenu"
        @else
        @endif ><a href="{{ route('store.category',['id'=>$item->id,'name'=>$item->category]) }}">{{$item->category}}</a>
        @if (count($sub)>0)
        <ul class="submenu">
          @foreach ($sub as $subitem)
          <li><a href="{{ route('store.subcategory',['id'=>$subitem->id,'name'=>$subitem->subcategory]) }}">{{ $subitem->subcategory }}</a></li>

          @endforeach
        </ul>
					@endif

      </li>
       @endforeach

          </ul>
        </nav>
      </aside> <!-- col.// --> --}}
      <div class="col-md-12">

    <!-- ================== COMPONENT SLIDER  BOOTSTRAP  ==================  -->
    <div id="carousel1_indicator" class="slider-home-banner carousel slide" data-ride="carousel">
      <ol class="carousel-indicators ">
        <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1_indicator" data-slide-to="1"></li>
        <li data-target="#carousel1_indicator" data-slide-to="2"></li>
      </ol>

    @php
    $banner=DB::table('banners')->where('status',1)->orderBy('id','desc')->get();
    $baneer1=DB::table('banners')->where('status',1)->first();

@endphp
      <div class="carousel-inner">
        @foreach ($banner as $item)
        <div class="carousel-item @if($loop->first)active @endif">
          <img src="{{asset($item->image)}}" alt="First slide" class="img-fluid">
        </div>
        @endforeach


      </div>
      <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- ==================  COMPONENT SLIDER BOOTSTRAP end.// ==================  .// -->

      </div> <!-- col.// -->

    </div> <!-- row.// -->

      </div> <!-- card-body.// -->
    </main> <!-- card.// -->

    </section>
  </div>
