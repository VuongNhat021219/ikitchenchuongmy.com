<div class="col-md-4 col-lg-3 p-b-80">
    <div class="side-menu">

        <div class="p-t-55">
            <h4 class=" cl2 p-b-33">
                Danh Mục
            </h4>

            <ul>
                @foreach ($danhmuc as $dm)
                    
                <li class="bor18">
                    <a href="{{  route('pro.timkiem',$dm->id).'-'.\Str::slug($dm->name,'-').'.html '  }}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                        {{ $dm->name }}
                    </a>
                </li>
                @endforeach

                
            </ul>
        </div>

        <div class="p-t-65">
            <h4 class=" cl2 p-b-33">
                Sản Phẩm Được Ưu Thích
            </h4>

            <ul>
                @foreach ($dsspleft as $sp)
                    
                <li class="flex-w flex-t p-b-30">
                    <a href="{{ route('pro.show', $sp->id) }}-{{ $sp->slug }}.html" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
                        <img src="uploads/images/{{ $sp->image }}" width="90px" height="110px" alt="PRODUCT">
                    </a>

                    <div class="size-215  flex-col-t p-t-8">
                        <a href="{{ route('pro.show', $sp->id) }}-{{ $sp->slug }}.html" class="stext-116 cl8 hov-cl1 trans-04">
                            {{ $sp->name }}
                        </a>

                        @if ($sp->price == $sp->price_sale)
                        <div class="product__panel-price" style="padding-top: 6px">

                            <span class="product__panel-price-current"style="font-size: 12px;margin-left:0px;">
                                {{ number_format($sp->price_sale) }} <sup>VND</sup>
                            </span>
                        </div>
                    @else
                        <div class="product__panel-price" style="padding-top: 6px">
                          
                            <span class="product__panel-price-current"style="font-size: 12px;margin-left:0px;">
                                {{ number_format($sp->price_sale) }} <sup>VND</sup>
                            </span>
                            <span class="product__panel-price-old" style="font-size: 12px">
                                {{ number_format($sp->price) }}<sup>VND</sup>
                            </span>
                        </div>

                    
                    @endif
                    </div>
                </li>
                @endforeach

                
            </ul>
        </div>

        
    </div>
</div>