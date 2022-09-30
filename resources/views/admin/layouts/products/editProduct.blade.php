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
                            <h4 class="page-title">Update Sản Phẩm</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Quản Lý Sản Phẩm</a></li>
                                    <li class="breadcrumb-item active">Update Sản Phẩm</li>
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


                                            <form class="form-horizontal" action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                               
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Tên Tiêu Đề Sản Phẩm</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                                                            placeholder="Nhập tên tiêu đề sản phẩm...">
                                                    </div>
                                                </div>

                                                @error('name')
                                                    <li class="alert alert-danger">{{ $message }}</li>
                                                @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Mô Tả Sản Phẩm</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" value="{{ $product->content }}" name="content" class="form-control"
                                                            placeholder="Nhập mô tả ngắn sản phẩm...">
                                                    </div>
                                                </div>
                                                @error('content')
                                                    <li class="alert alert-danger">{{ $message }}</li>
                                                @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Giá Gốc</label>
                                                    <div class="col-lg-10">
                                                        <input type="number" value="{{ $product->price }}" name="price" min="0" class="form-control"
                                                            placeholder="Giá Gốc...">
                                                    </div>
                                                </div>
                                                @error('price')
                                                <li class="alert alert-danger">{{ $message }}</li>
                                                 @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Giá Khuyến Mại Còn</label>
                                                    <div class="col-lg-10">
                                                        <input type="number" value="{{ $product->price_sale }}" name="price_sale" min="0" class="form-control"
                                                            placeholder="Giá Khuyến Mại...">
                                                    </div>
                                                </div>
                                                @error('price_sale')
                                                <li class="alert alert-danger">{{ $message }}</li>
                                                 @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Thuộc Danh Mục</label>
                                                    <div class="col-lg-3">
                                                        <select class="form-control" name="cate_id">
                                                                
                                                            <option value="{{ $product->cate_id }}">{{ $cateName}}</option>
                                                            <option value="0">-------------Danh Mục Khác------------</option>
                                                            @foreach ($cateAll as $cate)
                                                                <option value="{{ $cate->id }}">{{ $cate->name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                @error('cate_id')
                                                <li class="alert alert-danger">{{ $message }}</li>
                                                 @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Ảnh Hiển Thị Chính</label>
                                                    <div class="col-lg-10">
                                                        <img class="pb-3" src="uploads/images/{{ $product->image}}"  width="100px" height="100px" alt="">
                                                         <input type="file" value="{{ $product->image }}" class="form-control-file" name="image"  >
                                                    </div>
                                                </div>
                                                @error('image')
                                                <li class="alert alert-danger">{{ $message }}</li>
                                                 @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Vị Trí Muốn Hiển Thị</label>
                                                    <div class="col-lg-10">
                                                        <div class="controls">
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio5" value="3" @if ($product->status ==3) checked=""@endif>
                                                                <label for="radio5">
                                                                    Hiển Thị Trong Danh Sách Sản Phẩm Mới
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio1" value="0" @if ($product->status ==0)
                                                                checked=""
                                                            @endif>
                                                                <label for="radio1">
                                                                    Hiển Thị Trong Danh Sách Bán Chạy
                                                                </label>
                                                            </div>
        
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio2" value="1"  @if ($product->status ==1)
                                                                checked=""
                                                            @endif>
                                                                <label for="radio2">
                                                                    Hiển Thị Trong Danh Mục Liên Quan
                                                                </label>
                                                            </div>
        
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio3" value="2" @if ($product->status ==2)
                                                                checked=""
                                                            @endif>
                                                                <label for="radio3">
                                                                    Hiển Thị Trọng Danh Mục Bạn Có Thể Thích
                                                                </label>
                                                            </div>
                                                           
        
                                                            <div class="radio radio-danger">
                                                                <input type="radio" name="radio" id="radio5" value="5" @if ($product->status ==5)
                                                                checked=""
                                                            @endif>
                                                                <label for="radio5">
                                                                    khác
                                                                </label>
                                                            </div>
                                                            <div class="radio radio-danger">
                                                                <input type="radio" name="radio" id="radio4" value="4" @if ($product->status ==4)
                                                                checked=""
                                                            @endif>
                                                                <label for="radio4">
                                                                    Không Hiển Thị
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label">Ảnh Phụ (Thêm Nhiều Ảnh)</label>
                                                    <div class="col-lg-3">
                                                        <img class="pb-3" src="uploads/images/{{ $product->images1}}"  width="100px" height="100px" alt="">
                                                         <input type="file" class="form-control-file" value="{{ $product->images1}}" name="images1"  >
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <img class="pb-3" src="uploads/images/{{ $product->images2}}"  width="100px" height="100px" alt="">
                                                        <input type="file" class="form-control-file" value="{{  $product->images2 }}" name="images2"  >
                                                   </div>
                                                   <div class="col-lg-3">
                                                    <img class="pb-3" src="uploads/images/{{ $product->images3}}"  width="100px" height="100px" alt="">
                                                    <input type="file" value="{{  $product->images3 }}" class="form-control-file" name="images3"  >
                                               </div>
                                                </div>
                                                @error('images')
                                                <li class="alert alert-danger">{{ $message }}</li>
                                                 @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="example-placeholder">Mô Tả
                                                        Chi Tiết</label>
                                                    <div class="col-lg-10">
                                                        <div class="form-group">
                                                          <textarea class="form-control" name="description" id="editor1" cols="2" rows="2">{{ $product->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                @error('description')
                                                <li class="alert alert-danger">{{ $message }}</li>
                                                 @enderror

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-12 offset-md-6">
                                                        <button type="submit"
                                                            class="btn btn-primary waves-effect waves-light mr-1">
                                                            Thêm Ngay
                                                        </button>
                                                        <a href="{{ route('product.index') }}" type="reset"
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
