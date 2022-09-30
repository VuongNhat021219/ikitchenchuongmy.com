<section class="bestselling abc">
    <div class="container">
        <div class="row">
            <div class="bestselling__heading-wrap">
                <img src="edu/images/bestselling.png" alt="Sản phẩm bán chạy"
                class="bestselling__heading-img">
                <div class="bestselling__heading">Top bán chạy nhất tuần</div>
            </div>
        </div>

        <section class="row">
           @foreach ($BanChayPro as $bc)
               
            <div class="bestselling__product col-lg-4  col-md-6 col-sm-12">
                <div class="bestselling__product-img-box">
                    <img src="uploads/images/{{ $bc->image }}" alt="{{ $bc->image }}" class="bestselling__product-img">
                </div>
                <div class="bestselling__product-text">
                    <h3 class="bestselling__product-title">
                        <a href="" class="bestselling__product-link">{{ $bc->name }}</a>
                    </h3>

                    <div class="bestselling__product-rate-wrap"style="margin-left: 20%">
                        <i class="fas fa-star bestselling__product-rate"></i>
                        <i class="fas fa-star bestselling__product-rate"></i>
                        <i class="fas fa-star bestselling__product-rate"></i>
                        <i class="fas fa-star bestselling__product-rate"></i>
                        <i class="fas fa-star bestselling__product-rate"></i>
                    </div>

                   @if ($bc->price == $bc->price_sale)
                   <span class="product__panel-price-current" style="margin-left: 25%;font-size: 14px">
                    {{ number_format($bc->price) }} <sup>VND</sup>
                 </span>
                   @else
                   <div class="product__panel-price">
                    <span class="product__panel-price-old" style="font-size: 14px">
                        {{ number_format($bc->price) }}<sup>VND</sup>
                    </span>
                    <span class="product__panel-price-current"style="font-size: 14px">
                       {{ number_format($bc->price_sale) }} <sup>VND</sup>
                    </span>
                </div>

                <div class="product__panel-price-sale-off" style="left: 0">
                    Sale
                </div>
                   @endif
                    <div class="bestselling__product-btn-wrap">
                        <a href="{{ route('pro.show',$bc->id) }}-{{ $bc->slug }}.html" style="margin-left: 25%;margin-top:10px" class="btn btn-danger " >Xem Ngay</a>
                    </div>
                </div>
            </div>
           @endforeach
            
        </section>

       
    </div>
</section>
