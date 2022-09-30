@extends('admin.master.master')
@section('css')
@endsection

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Sửa Bài Viết</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Quản Lý Bài Viết</a></li>
                                    <li class="breadcrumb-item active">Sửa Bài Viết Mới</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">


                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Vui Lòng Nhập Dữ Liệu</h4>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="">
                                            {{-- @include('admin.errors.alert') --}}


                                            <form class="form-horizontal" action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                                               @method('PUT')
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Tên Tiêu Đề Bài Viết</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="title" value="{{ $blog->title }}" class="form-control"
                                                            placeholder="Nhập tên tiêu đề bài viết...">
                                                    </div>
                                                </div>

                                                @error('title')
                                                    <li class="alert alert-danger">{{ $message }}</li>
                                                @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Nội Dung Ngắn</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="title_sub"  value="{{ $blog->title_sub }}" class="form-control"
                                                            placeholder="Nhập mô tả ngắn...">
                                                    </div>
                                                </div>
                                                @error('title_sub')
                                                    <li class="alert alert-danger">{{ $message }}</li>
                                                @enderror


                                               

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Hình Ảnh</label>
                                                    <div class="col-lg-10">
                                                        <img class="pb-3" src="uploads/images/{{ $blog->image}}"  width="100px" height="100px" alt="">
                                                         <input type="file" class="form-control" name="image"  >
                                                    </div>
                                                </div>
                                                @error('image')
                                                <li class="alert alert-danger">{{ $message }}</li>
                                                 @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Thuộc Danh Mục?</label>
                                                    <div class="col-lg-5">
                                                        <div class="controls">
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio2" value="1" @if ($blog->danhmucbaiviet ==1) checked=""@endif>
                                                                <label for="radio2">
                                                                    Thuộc Danh Mục Bài Viết Vào Bếp
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio1" value="2" @if($blog->danhmucbaiviet ==2) checked=""@endif>
                                                                <label for="radio1">
                                                                    Thuộc Danh Mục Bài Viết Hướng Dẫn Sử Dụng
                                                                </label>
                                                            </div>
        
                                                            
        
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio3" value="3" @if($blog->danhmucbaiviet ==3) checked=""@endif>
                                                                <label for="radio3">
                                                                    Thuộc Danh Mục Bài Viết Vào Sản Phẩm Mới Ra Mắt
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio5" value="4" @if($blog->danhmucbaiviet ==4) checked=""@endif>
                                                                <label for="radio5">
                                                                    Thuộc Danh Mục Bài Viết Tin Tức
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio14" value="5" @if($blog->danhmucbaiviet ==5) checked=""@endif>
                                                                <label for="radio14">
                                                                    Thuộc Danh Mục Bài Viết Xe Cộ
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio15" value="6" @if($blog->danhmucbaiviet ==6) checked=""@endif>
                                                                <label for="radio15">
                                                                    Thuộc Danh Mục Bài Viết Phái Đẹp
                                                                </label>
                                                            </div>
                                                           
                                                           
        
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <div class="controls">
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio10"  value="7" @if($blog->danhmucbaiviet ==7) checked=""@endif>
                                                                <label for="radio10">
                                                                    Thuộc Danh Mục Bài Viết Thế Giới
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio11" value="8" @if($blog->danhmucbaiviet ==8) checked=""@endif>
                                                                <label for="radio11">
                                                                    Thuộc Danh Mục Bài Viết Kinh Doanh
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio12" value="9" @if($blog->danhmucbaiviet ==9) checked=""@endif>
                                                                <label for="radio12">
                                                                    Thuộc Danh Mục Bài Viết Giáo Dục
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio13" value="10" @if($blog->danhmucbaiviet ==10) checked=""@endif>
                                                                <label for="radio13">
                                                                    Thuộc Danh Mục Bài Viết Chuyện Lạ
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio17" value="11" @if($blog->danhmucbaiviet ==11) checked=""@endif>
                                                                <label for="radio17">
                                                                    Khác
                                                                </label>
                                                            </div>

                                                            <div class="radio radio-danger">
                                                                <input type="radio" name="radio" id="radio16" value="0" @if($blog->danhmucbaiviet ==0) checked=""@endif>
                                                                <label for="radio16">
                                                                    Ẩn Bài Viết
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                             

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="example-placeholder">Nội Dung Bài Viết</label>
                                                    <div class="col-lg-10">
                                                        <div class="form-group">
                                                          <textarea class="form-control" name="content" id="editor1" cols="2" rows="2">{{ $blog->content }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('content')
                                                <li class="alert alert-danger">{{ $message }}</li>
                                                 @enderror
                                                 

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-12 offset-md-6">
                                                        <button type="submit"
                                                            class="btn btn-primary waves-effect waves-light mr-1">
                                                            Thêm Ngay
                                                        </button>
                                                        <a href="{{ route('blog.index') }}" type="reset"
                                                            class="btn btn-secondary waves-effect waves-light">
                                                            Cancel
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
               
                </div>
                <!-- end row -->



            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end content -->




        <!-- end Footer -->

    </div>
@endsection

@section('js')
<script>
    CKEDITOR.replace( 'editor1' );

</script>
@endsection
