<div class="wrap-header-mobile">
    <!-- Logo moblie -->
    <div class="logo-mobile">
        <a href="{{ route('home.index') }}"><img src="clients/images/icons/ikitchen-giai-phap-tong-the-khong-gian-bep.png"
                width="100px" alt="IMG-LOGO"></a>
    </div>

    <!-- Icon header -->
    <div class="wrap-icon-header flex-w flex-r-m m-r-15">
        <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
            <i class="zmdi zmdi-search"></i>
        </div>

        <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
            data-notify="2">
            <i class="zmdi zmdi-shopping-cart"></i>
        </div>


    </div>

    <!-- Button show menu -->
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </div>
</div>

<!-- Menu Mobile -->
<div class="menu-mobile">
    <ul class="topbar-mobile">
        <li>
            <div class="left-top-bar">
                Địa chỉ: Số nhà 16 - Thôn 1 - Xã Quảng Bị - Huyên Chương Mỹ - Thành Phố Hà Nội; Hotline: 032.858.8850 

            </div>
        </li>

        
    </ul>

    <ul class="main-menu-m">
        <li class="active-menu">
            <a href="{{ route('home.index') }}">Trang Chủ</a>

        </li>

        <li>
            <a href="{{ route('pro.index') }}">Sản Phẩm</a>
            <span class="badge badge-danger badge-pill float-right">New</span>
            <ul class="sub-menu" style="background-color: rgba(255,255,255,0.8);border-radius: 30px;">
                @foreach ($danhmuc as $danhmuc)
                    
                 <li><a href="#">{{ $danhmuc->name }}</a></li>
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