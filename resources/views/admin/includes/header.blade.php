<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        
        <li class="dropdown notification-list">
            <a href="{{ route('home.index') }}" class="btn btn-confirm" style="color:#000; margin-top:15px; background-color: bisque;border-radius:30px">Chuyển Qua Trang Web</a>
        </li>
        

        

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown"
                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fas fa-user-circle" style="font-size: 20px"></i>
                <span class="pro-user-name ml-1">
                    Admin <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                
                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="{{ route('login') }}" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout-variant"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

        


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo text-center logo-dark">
            <span class="logo-lg">
                <img src="clients/images/icons/ikitchen-giai-phap-tong-the-khong-gian-bep.png" alt=""
                    height="50" width="90">
                <!-- <span class="logo-lg-text-dark">Velonic</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-lg-text-dark">V</span> -->
                <img src="clients/images/icons/ikitchen-giai-phap-tong-the-khong-gian-bep.png" alt=""
                    height="22">
            </span>
        </a>
        

        <a href="index.html" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="clients/images/icons/ikitchen-giai-phap-tong-the-khong-gian-bep.png" alt=""
                    height="50" width="90">
                <!-- <span class="logo-lg-text-dark">Velonic</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-lg-text-dark">V</span> -->
                <img src="clients/images/icons/ikitchen-giai-phap-tong-the-khong-gian-bep.png" alt=""
                    height="22">
            </span>
        </a>
    </div>

    <!-- LOGO -->


    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>
        <li class="d-none d-lg-block">
            <form class="app-search" action="{{ route('product.searchPro') }}" method="GET">
                @csrf
                <div class="app-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
        
    </ul>
</div>