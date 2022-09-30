<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>

    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Giỏ Hàng Của Bạn
            </span>

            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>
        @php
        $total = 0;	
        @endphp
        <div class="header-cart-content flex-w js-pscroll">
            <ul class="header-cart-wrapitem w-full">
              @if (count($sanpham)>0)
                  
                @foreach ($sanpham as $sp)
                @php
                $priceEnd = $sp->price_sale * $carts[$sp->id];
                $total += $priceEnd;
                @endphp
               
                <li class="header-cart-item flex-w flex-t bor12 m-b-12">
                    <div class="header-cart-item-img">
                        <img src="uploads/images/{{ $sp->image }}" alt="IMG">
                    </div>

                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            {{ $sp->name }}
                        </a>

                        @if ($sp->price == $sp->price_sale)
                   <span class="product__panel-price-current" style="margin-left: 25%;font-size: 10px">
                    {{ $carts[$sp->id] }} <sup>x</sup> {{ number_format($sp->price_sale) }} <sup>VND</sup>
                 </span>
                   @else
                   <div class="product__panel-price">
                    {{ $carts[$sp->id] }} <sup>x</sup>
                    <span class="product__panel-price-old" style="font-size: 10px">
                      {{ number_format($sp->price) }}<sup>VND</sup>
                    </span>
                    <span class="product__panel-price-current"style="font-size: 10px">
                       {{ number_format($sp->price_sale) }} <sup>VND</sup>
                    </span>
                </div>

               
                   @endif
                    </div>
                </li>

                @endforeach
                @endif
  
            </ul>

            <div class="w-full">
               

                <div class="header-cart-buttons flex-w w-full">
                    <div class="header-cart-total w-full p-b-40">
                        Tổng Tiền:<span style="color: red;font-weight:bold"> {{ number_format($total) }} </span> <sup>VND</sup>
                    </div>
                    
                    <a href="{{ route('pro.showcard') }}"
                        class="flex-c-m stext-101 m-l-50 cl0 size-107 bg3 bor1 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Tới Giỏ Hàng
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>