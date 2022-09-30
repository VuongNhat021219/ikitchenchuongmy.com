
	<!-- breadcrumb -->
	<div class="container abc">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="{{ route("blogclient.index") }}" class="stext-109 cl8 hov-cl1 trans-04">
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
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				{{ $tt->title }}
			</span>
		</div>
	</div>


	<!-- Content page -->
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!--  -->
						<div class="wrap-pic-w how-pos5-parent">
							<img src="uploads/images/{{ $tt->image }}" alt="IMG-BLOG">

							
						</div>

						<div class="p-t-32">
							

							<h4 class="ltext-109 cl2 p-b-28">
								{{ $tt->title }}
							</h4>

							<p class="stext-117 cl6 p-b-26">
								{{ $tt->title_sub }}
							</p>
							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span>
									<span class="cl4">By</span> Admin  
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									{{ $tt->created_at }}
								</span>

								
							</span>

							<p >
								{!! $tt->content !!}
							</p>
						</div>

						<div class="flex-w flex-t p-t-16">
							<span class="size-216 stext-116 cl8 p-t-4">
								Tags
							</span>

							<div class="flex-w size-217">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
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
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									{{ $tt->title }}
								</a>
							</div>
						</div>

						
					</div>
				</div>

				@include('client.layouts.blog_sub_right')
			</div>
		</div>
	</section>	
	