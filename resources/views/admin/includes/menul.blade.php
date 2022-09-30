<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Chức Năng:</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-basket"></i>
                        <span> Quản Lý Danh Mục </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">

                        <li><a href="{{ route('category.index') }}">Hiển Thị Danh Mục</a></li>
                        <li><a href="{{ route('category.create') }}">Thêm Danh Mục</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> Quản Lý Sản Phẩm </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('product.index') }}">Hiển Thị Sản Phẩm</a></li>
                        <li><a href="{{ route('product.create') }}">Thêm Sản Phẩm</a></li>
                    </ul>
                </li>

               <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion ion-ios-hourglass"></i>
                        <span> Quản Lý Slider </span>
                        <span class="badge badge-warning badge-pill float-right">Hot</span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('slider.index') }}">Hiển Thị Tất Cả Slider</a></li>
                        <li><a href="{{ route('slider.create') }}">Thêm Mới Slider</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-pie"></i>
                        <span> Quản Lý Tin Bài </span>
                        <span class="badge badge-danger badge-pill float-right">New</span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('blog.index') }}">Hiển Thị Tất Cả Tin Bài</a></li>
                        <li><a href="{{ route('blog.create') }}">Thêm Mới Tin Bài</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion ion-ios-hourglass"></i>
                        <span> Quản Lý Đơn Hàng </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{ route('carts.index') }}">Hiển Thị Tất Cả Đơn Hàng</a></li>
                    </ul>
                </li>

                {{-- <li>
            <a href="javascript: void(0);" class="waves-effect">
                <i class="ion-md-mail"></i>
                <span> Mail </span>
                <span class="badge badge-warning badge-pill float-right">12</span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="email-inbox.html">Inbox</a></li>
                <li><a href="email-compose.html">Compose Mail</a></li>
                <li><a href="email-read.html">View Mail</a></li>
                <li><a href="email-templates.html">Email Templates</a></li>
            </ul>
        </li>

        

        <li>
            <a href="javascript: void(0);" class="waves-effect">
                <i class="ion-md-copy"></i>
                <span> Pages </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li><a href="pages-profile.html">Profile</a></li>
                <li><a href="pages-timeline.html">Timeline</a></li>
                <li><a href="pages-invoice.html">Invoice</a></li>
                <li><a href="pages-contact.html">Contact-list</a></li>
                <li><a href="pages-login.html">Login</a></li>
                <li><a href="pages-register.html">Register</a></li>
                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                <li><a href="pages-blank.html">Blank Page</a></li>
                <li><a href="pages-404.html">404 Error</a></li>
                <li><a href="pages-404_alt.html">404 alt</a></li>
                <li><a href="pages-500.html">500 Error</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="waves-effect">
                <i class="mdi mdi-share-variant"></i>
                <span> Multi Level </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level nav" aria-expanded="false">
                <li>
                    <a href="javascript: void(0);">Level 1.1</a>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="false">Level 1.2
                            <span class="menu-arrow"></span>
                        </a>
                    <ul class="nav-third-level nav" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);">Level 2.1</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">Level 2.2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li> --}}
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->