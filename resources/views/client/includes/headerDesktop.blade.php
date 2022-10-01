<div class="container-menu-desktop">
    <!-- Topbar -->
    <div class="top-bar">
        <div class="content-topbar flex-sb-m h-full container">
            <div class="left-top-bar">
                Địa chỉ: Số nhà 16 - Thôn 1 - Xã Quảng Bị - Huyên Chương Mỹ - Thành Phố Hà Nội <span
                    class="p-lr-25"> Hotline: 032.858.8850 </span>
            </div>

        </div>
    </div>
    <div class="wrap-menu-desktop">
        <nav class="limiter-menu-desktop container">

            <!-- Logo desktop -->
            <a href="{{ route('home.index') }}" class="logo">
                <img src="clients/images/icons/ikitchen-giai-phap-tong-the-khong-gian-bep.png" alt="IMG-LOGO">
            </a>

            <!-- Menu desktop -->
            <div class="menu-desktop">
                <ul class="main-menu">
                    <li class="">
                        <a href="{{ route('home.index') }}">Trang Chủ</a>

                    </li>

                    <li>
                        <a href="#">Sản Phẩm</a>
                        <span class="badge badge-danger badge-pill float-right">New</span>
                        <ul class="sub-menu" style="background-color: rgba(255,255,255,1);border-radius: 30px;">
                        
                        <li ><a class="hover__1"  href="{{ route('pro.index') }}" >Tất Cả Sản Phẩm</a></li>
                            @foreach ($danhmuc as $danhmuc)
                               
                            <li><a class="hover__1"  href="{{ route('pro.timkiem',$danhmuc->id).'-'.\Str::slug($danhmuc->name,'-').'.html ' }}">{{ $danhmuc->name }}</a></li>
                           @endforeach

                           
                        </ul>
                    </li>


                    <li>
                        <a href="{{ route('blogclient.index') }}">Tin Tức</a>
                        <span class="badge badge-danger badge-pill float-right">Hots</span>

                    </li>
                    <li>
                        <a href="{{ route('contactClient.index') }}">Liên Hệ</a>
                        <span class="badge badge-danger badge-pill float-right">Now</span>
            
                    </li>

                    <li>
                        <a href="{{ route('pro.showcard') }}">Giỏ Hàng</a>
                    </li>
                </ul>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"
                data-notify="{{ !is_null(Session::get('carts'))?count(Session::get('carts')):0 }} " >
                    
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>


            </div>
        </nav>
    </div>
</div>
