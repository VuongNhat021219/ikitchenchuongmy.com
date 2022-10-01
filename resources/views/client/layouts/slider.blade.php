<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            @foreach ($slider as $slider)
                

            <div class="item-slick1" style="background-image: url({{ asset('uploads/images')."/".$slider->thumb }});">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                            <span class="ltext-101 cl2 respon2"  style="background-color: rgba(255,255,255,0.3);">
                                {{ $slider->name }}
                            </span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn"
                            data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1"  style="background-color: rgba(255,255,255,0.3);">
                                {{ $slider->name_sub }}
                            </h2>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="{{ route('pro.index') }}"
                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Xem Chi Tiết
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
           
        </div>
    </div>
</section>