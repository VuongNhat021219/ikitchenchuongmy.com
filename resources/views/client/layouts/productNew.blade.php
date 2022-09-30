<section class="sec-relate-product bg0 p-t-23 p-b-80">
    <div class="container">
        <div class="row">
            <div class="bestselling__heading-wrap">
                <img src="edu/images/bestselling.png" alt="Sản phẩm bán chạy" class="bestselling__heading-img">
                <div class="bestselling__heading">Sản Phẩm Liên Quan</div>
            </div>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach ($splienquan as $bc)
                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="uploads/images/{{ $bc->image }}" alt="IMG-PRODUCT">


                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="{{ route('pro.show', $bc->id) }}-{{ $bc->slug }}.html"
                                        class="mtext-104 text-center cl2 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $bc->name }}
                                    </a>

                                    @if ($bc->price == $bc->price_sale)
                                        <span class="product__panel-price-current"
                                            style="margin-left: 25%;font-size: 14px">
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

                                        <div class="product__panel-price-sale-off">
                                            Sale
                                        </div>
                                    @endif
                                    <div class="bestselling__product-btn-wrap b-f_v">
                                        <a href="{{ route('pro.show', $bc->id) }}-{{ $bc->slug }}.html"
                                            style="margin-left: 50%;margin-top:10px" class="btn btn-danger ">Xem
                                            Ngay</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach


              

               
            </div>
        </div>
    </div>
</section>
