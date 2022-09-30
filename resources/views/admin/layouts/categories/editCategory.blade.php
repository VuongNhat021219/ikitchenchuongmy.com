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
                        <h4 class="page-title">Sửa Danh Mục</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Quản Lý Danh Mục</a></li>
                                <li class="breadcrumb-item active">Sửa Danh Mục</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Vui Lòng Nhập Dữ Liệu</h4>

                            <form class="parsley-examples" action="{{ route('category.update',$category->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label  class="col-md-4 col-form-label">Tên Danh Mục<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" name="name" value="{{ $category->name }}"
                                            class="form-control" placeholder="Nhập Tên Danh Mục...">
                                    </div>
                                </div>
                                @include('admin.errors.alert')
                                
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit"
                                            class="btn btn-primary waves-effect waves-light mr-1">
                                            Update Ngay
                                        </button>
                                        <a href="{{ route('category.index') }}" type="reset"
                                            class="btn btn-secondary waves-effect waves-light">
                                            Cancel
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-lg-4">

                </div>
                <!-- end col -->
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
    
@endsection