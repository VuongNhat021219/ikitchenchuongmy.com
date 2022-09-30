 <!-- post -->
 <section class="posts">
    <div class="container">
        <header class="row posts__title">
            <div class="posts__title-wrap col-lg-12 col-md-12 col-sm-12">
                <h2 class="posts__heading">
                    Tin tức - Bài viết
                </h2>
            </div>
        </header>
        <article class="row posts__list">
         @foreach ($tintuc as $tt)
             
            <a href="">
                <div class="posts__item col-lg-3 col-md-6 col-sm-6">
                    <div class="posts__item-img">
                        <img src="uploads/images/{{ $tt->image }}">
                    </div>
                    <h3 class="posts__item-heading">
                        <a href="{{ route('blogclient.show',$tt->id) }}-{{ $tt->slug }}.html" class="posts__item-title">
                            {{ $tt->title }}
                        </a>
                    </h3>
                    <div class="posts__item-date">
                        {{ $tt->created_at }}
                    </div>
                    <div class="posts__item-cate-wrap">
                        <div class="posts__item-cate">
                            <i class="fa fa-folder posts__item-cate-icon"></i>
                            <div class="posts__item-cate-name">
                                @if ($tt->danhmucbaiviet==1)Vào Bếp
                                @elseif ($tt->danhmucbaiviet==2)Hướng Dẫn Sử Dụng
                                @elseif ($tt->danhmucbaiviet==3) Sản Phẩm Mới Ra Mắt
                                @elseif ($tt->danhmucbaiviet==4)Tin Tức
                                @elseif ($tt->danhmucbaiviet==5)Xe Cộ
                                @elseif ($tt->danhmucbaiviet==6)Phái Đẹp
                                @elseif ($tt->danhmucbaiviet==7)Thế Giới
                                @elseif ($tt->danhmucbaiviet==8)Kinh Doanh
                                @elseif ($tt->danhmucbaiviet==9)Giáo Dục
                                @elseif ($tt->danhmucbaiviet==10)Chuyện Lạ
                                @else Khác
                                @endif
                            </div>
                        </div>
                        <div class="posts__item-cate-ad">
                            <i class="fa fa-user posts__item-cate-ad-icon"></i>
                            <div class="posts__item-cate-ad-name">
                                Admin
                            </div>   
                        </div>
                    </div>
                    <div class="posts__item-description">
                        {{ $tt->title_sub }}
                    </div>
                </div>
            </a>

         @endforeach
            
        </article>
        <article class="row posts__view">
            <a href="{{ route('blogclient.index') }}" class="posts__view-btn">Xem thêm</a>
        </article>
    </div>
</section>
<!-- end post -->