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
                            <h4 class="page-title">Update Slider</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Quản Lý Slider</a></li>
                                    <li class="breadcrumb-item active">Update Slider</li>
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


                                            <form class="form-horizontal" action="{{ route('slider.update',$slider->id) }}" method="POST" enctype="multipart/form-data">
                                               @method('PUT')
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Tên Tiêu Đề</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" required name="name" value="{{ $slider->name }}" class="form-control"
                                                            placeholder="Nhập tên tiêu đề...">
                                                    </div>
                                                </div>

                                                @error('name')
                                                    <li class="alert alert-danger">{{ $message }}</li>
                                                @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Tên Phụ</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" required name="name_sub" class="form-control"
                                                            placeholder="Nhập tên tiêu đề...">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Đường Dẫn URL</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" required name="url" value="{{ $slider->url }}" class="form-control">
                                                    </div>
                                                </div>
                                                @error('url')
                                                    <li class="alert alert-danger">{{ $message }}</li>
                                                @enderror

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Sắp Xếp</label>
                                                    <div class="col-lg-10">
                                                        <input type="number" name="sort_by" required min="1" value="{{ $slider->sort_by }}" class="form-control"
                                                            >
                                                    </div>
                                                </div>
                                                @error('sort_by')
                                                <li class="alert alert-danger">{{ $message }}</li>
                                                @enderror

                                                

                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Hiển Thị Không?</label>
                                                    <div class="col-lg-10">
                                                        <div class="controls">
                                                            <div class="radio radio-success">
                                                                <input type="radio" name="radio" id="radio5" value="1" @if ($slider->active==1)
                                                                checked=""
                                                                @endif>
                                                                <label for="radio5">
                                                                    Có
                                                                </label>
                                                            </div>
        
                                                            <div class="radio radio-danger">
                                                                <input type="radio" name="radio" id="radio4" value="0"@if ($slider->active==0)
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
                                                    <label class="col-lg-2 col-form-label">Ảnh Slider</label>
                                                    <div class="col-lg-10">
                                                        <img class="pb-3" src="uploads/images/{{ $slider->thumb}}"  width="100px" height="100px" alt="">
                                                         <input type="file"  class="form-control-file" name="thumb"  >
                                                    </div>
                                                   
                                                </div>
                                                @error('thumb')
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
