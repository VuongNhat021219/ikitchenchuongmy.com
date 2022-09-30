<!-- product love -->
<section class="product__love ">
    <div class="container border-top border-danger">
        <div class="row bg-white">
            <div class="col-lg-12 col-md-12 col-sm-12 product__love-title">
                <h2 class="product__love-heading " >
                    Có thể bạn thích
                </h2>
            </div>
        </div>
        <div class="row bg-white">
            @foreach ($spbancothethich as $bc)
                
            <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                <div class="product__panel-img-wrap">
                    <img src="uploads/images/{{ $bc->image }}" alt="" class="product__panel-img">
                </div>
                <h3 class="product__panel-heading">
                    <a href="#" class="product__panel-link">{{ $bc->name }}</a>
                </h3>
                <div class="product__panel-rate-wrap">
                    <i class="fas fa-star product__panel-rate"></i>
                    <i class="fas fa-star product__panel-rate"></i>
                    <i class="fas fa-star product__panel-rate"></i>
                    <i class="fas fa-star product__panel-rate"></i>
                    <i class="fas fa-star product__panel-rate"></i>
                </div>
               
                
                @if ($bc->price == $bc->price_sale)
                <span class="product__panel-price-current" style="margin-left: 25%;font-size: 14px">
                 {{ number_format($bc->price) }} <sup>VND</sup>
              </span>
                @else
                <div class="product__panel-price">
                 <span class="product__panel-price-old" style="font-size: 10px">
                     {{ number_format($bc->price) }}<sup>VND</sup>
                 </span>
                 <span class="product__panel-price-current"style="font-size: 10px">
                    {{ number_format($bc->price_sale) }} <sup>VND</sup>
                 </span>
             </div>

             <div class="product__panel-price-sale-off">
                 Sale
             </div>
                @endif
                 <div class="bestselling__product-btn-wrap">
                     <a href="{{ route('pro.show',$bc->id) }}-{{ $bc->slug }}.html" style="margin-left: 25%;margin-top:10px" class="btn btn-danger " >Xem Ngay</a>
                 </div>

            </div>
            @endforeach

           
        </div>
    {{ $spbancothethich->links() }}

    </div>

</section>
<!--end product love -->