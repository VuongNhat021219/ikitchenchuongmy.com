
	<div class="row abc">
		<div class="bestselling__heading-wrap">
			<img src="edu/images/bestselling.png" alt="Sản phẩm bán chạy"
			class="bestselling__heading-img">
			<div class="bestselling__heading">Tin Tức</div>
		</div>
	</div>


	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						
						<!-- item blog -->
						@foreach ($showbaiviet as $baiviet)
							<div class="p-b-80 p-t-80">
								<h6 >
									<a href="{{ route('blogclient.show',$baiviet->id) }}-{{ $baiviet->slug }}.html" class="ltext-108 cl2 hov-cl1 trans-04">
										{{ $baiviet->title }}
									</a>
								</h6>
	
								<div class="p-t-16">
									
									<a href="{{ route('blogclient.show',$baiviet->id) }}-{{ $baiviet->slug }}.html" style="float: left;margin-right: 16px;"  class="hov-img0 how-pos5-parent">
										<img src="uploads/images/{{ $baiviet->image }}" style="    width: 300px;height: 200px;" alt="IMG-BLOG">
		
										
									</a>
									<p class="stext-117 cl6">
										{{ $baiviet->title_sub }}

									</p>
	
									<div class="flex-w flex-sb-m p-t-18">
										<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
											<span>
												<span class="cl4">By</span> Admin  
												<span class="cl12 m-l-4 m-r-6">|</span>
											</span>
	
											<span>
												@if ($baiviet->danhmucbaiviet==1)Vào Bếp
												@elseif ($baiviet->danhmucbaiviet==2)Hướng Dẫn Sử Dụng
												@elseif ($baiviet->danhmucbaiviet==3) Sản Phẩm Mới Ra Mắt
												@elseif ($baiviet->danhmucbaiviet==4)Tin Tức
												@elseif ($baiviet->danhmucbaiviet==5)Xe Cộ
												@elseif ($baiviet->danhmucbaiviet==6)Phái Đẹp
												@elseif ($baiviet->danhmucbaiviet==7)Thế Giới
												@elseif ($baiviet->danhmucbaiviet==8)Kinh Doanh
												@elseif ($baiviet->danhmucbaiviet==9)Giáo Dục
												@elseif ($baiviet->danhmucbaiviet==10)Chuyện Lạ
												@else Khác
												@endif
											</span>
	
										</span>
	
										
									</div>
								</div>
							</div>
						@endforeach

						<!-- item blog -->

						

						<!-- Pagination -->
						{{ $showbaiviet->links() }}
					</div>
				</div>

				@include('client.layouts.blog_sub_right')
			</div>
		</div>
	</section>	
	