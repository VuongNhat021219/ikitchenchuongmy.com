@extends('client.master.index')
@section('css')
<style>
    .abc{
        margin-top: 80px;
    }
</style>
@endsection
@section('content')
 
   
    <!-- end bestselling product -->
 <!-- product -->
 <section class="product abc">
    <div class="container">
        <div class="row">
            <aside class="product__sidebar col-lg-3 col-md-0 col-sm-12">
                <div class="product__sidebar-heading">
                    <h2 class="product__sidebar-title">
                        Sản Phẩm</h2>
                    <span class="badge badge-danger badge-pill float-right">New</span>
                </div>

                <nav class="product__sidebar-list">

                    <div class="row">
                        @foreach ($dsspleft as $ds)
                            <div class="product__sidebar-item col-lg-6">
                                <img src="uploads/images/{{ $ds->image }}" alt=""
                                    class="product__sidebar-item-img" style="max-width: 6rem">
                                <a href="{{ route('pro.show', $ds->id) }}-{{ $ds->slug }}.html" class="product__sidebar-item-name">{{ $ds->name }}</a>
                                @if ($ds->price == $ds->price_sale)
                                    <div class="product__panel-price">

                                        <span class="product__panel-price-current"style="font-size: 8px">
                                            {{ number_format($ds->price_sale) }} <sup>VND</sup>
                                        </span>
                                    </div>
                                @else
                                    <div class="product__panel-price">
                                       <span class="product__panel-price-old" style="font-size: 8px">
                                           {{ number_format($ds->price) }}<sup>VND</sup>
                                       </span>
                                        <span class="product__panel-price-current"style="font-size: 8px">
                                            {{ number_format($ds->price_sale) }} <sup>VND</sup>
                                        </span>
                                    </div>

                                    <div class="product__panel-price-sale-off" style="font-size: 10px; top:-10px;left:5px; width: 2rem; height: 2rem;">
                                        Hot
                                    </div>
                                @endif
                            </div>
                        @endforeach

                    </div>
                </nav>

                <div class="product__sidebar-img-wrap">
                    <!-- <img src="edu/images1/product/Demon Slayer_ Kimetsu no Yaiba - Assista na Crunchyroll.png" width="255" height="350" alt=""> -->
                    <video width="255" height="300" controls>
                        <source src="uploads/video/vdeo_1.mp4" type="video/mp4">
                    </video>
                </div>
            </aside>

            <article class="product__content col-lg-9 col-md-12 col-sm-12">
                <nav class="row">
                    <ul class="product__list hide-on-mobile">
                        @foreach ($danhmuc as $danhmuc)
                            <li class="product__item product__item--active">
                                <a href="#" class="product__link">{{ $danhmuc->name }}</a>
                            </li>
                        @endforeach


                    </ul>


                    <div class="product__title-mobile  mb-2">
                        <h2 class="product__sidebar-title">
                            Sản Phẩm</h2>
                        <span class="badge badge-danger badge-pill float-right">New</span>
                    </div>
                </nav>
                <div class="row product__panel">
                    
                   
                     @foreach ($product as $product)
                         
                     <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                       <div class="product__panel-item-wrap">
                           <div class="product__panel-img-wrap">
                               <img src="uploads/images/{{ $product->image }}" alt=""
                                   class="product__panel-img">
                           </div>
                           <h3 class="product__panel-heading">
                               <a href="{{ route('pro.show', $product->id) }}-{{ $product->slug }}.html"
                                   class="product__panel-link">{{ $product->name }}</a>
                           </h3>
                           <div class="product__panel-rate-wrap">
                               <i class="fas fa-star product__panel-rate"></i>
                               <i class="fas fa-star product__panel-rate"></i>
                               <i class="fas fa-star product__panel-rate"></i>
                               <i class="fas fa-star product__panel-rate"></i>
                               <i class="fas fa-star product__panel-rate"></i>
                           </div>

                           @if ($product->price == $product->price_sale)
                               <span class="product__panel-price-current"
                                   style="margin-left: 25%;font-size: 14px">
                                   {{ number_format($product->price) }} <sup>VND</sup>
                               </span>
                           @else
                               <div class="product__panel-price">
                                   <span class="product__panel-price-old" style="font-size: 10px">
                                       {{ number_format($product->price) }}<sup>VND</sup>
                                   </span>
                                   <span class="product__panel-price-current"style="font-size: 12px">
                                       {{ number_format($product->price_sale) }} <sup>VND</sup>
                                   </span>
                               </div>

                               <div class="product__panel-price-sale-off">
                                   Sale
                               </div>
                           @endif
                           <div class="bestselling__product-btn-wrap">
                               <a href="{{ route('pro.show', $product->id) }}-{{ $product->slug }}.html"
                                   style="margin-left: 25%;margin-top:10px" class="btn btn-danger ">Xem Ngay</a>
                           </div>
                       </div>
                   </div>
                   @endforeach
                  <div class="container">
                    <h3 class="text-center cl6 m-l-50"> ----Hết----</h3>
                  </div>
                         

                </div>
            </article>
            {{-- {{ $dssanpham->links() }} --}}

        </div>
    </div>
    
</section>
<!--end product -->


    @include('client.layouts.spbancothethich')
    @include('client.layouts.productNew')
    @include('client.layouts.baiviet')
    <!-- insurance -->
    @include('client.layouts.insurance')

  
@endsection
 
@section('js')
@endsection
