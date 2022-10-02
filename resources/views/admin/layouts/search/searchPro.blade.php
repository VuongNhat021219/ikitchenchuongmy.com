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
                        <h4 class="page-title">Hiển Thị Sản Phẩm</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Quản Lý Sản Phẩm</a></li>
                                <li class="breadcrumb-item active">Hiển Thị Sản Phẩm</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('product.create') }}" class="btn btn-info float-right m-2">Thêm Nhanh</a>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Dữ Liệu Tìm Được</h4>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th style="width:5%">#</th>
                                            <th style="width:15%">Tên Sản Phẩm</th>
                                            <th style="width:10%">Giá Gốc</th>
                                            <th style="width:10%">Giá Khuyến Mại</th>
                                            <th>Ảnh </th>
                                            <th style="width:5%">Trạng Thái</th>
                                            <th style="width:10%">Ngày Tạo</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($pro as $pro)
                                        
                                        <tr class="text-center">
                                            <th scope="row">{{ $pro->id }}</th>
                                            <td>{{ $pro->name }}</td>
                                            <td>{{ number_format($pro->price) }}<sup>VNĐ</sup></td>
                                            <td>{{ number_format($pro->price_sale) }} <sup>VNĐ</sup></td>
                                            <td>  <img src="uploads/images/{{ $pro->image}}" width="100px" height="100px" alt="{{ $pro->image}}"> </td>
                                            <td>
                                                @if ($pro->status==0)
                                                    Hiển Thị Trong Danh Sách Bán Chạy
                                                @elseif ($pro->status==1)
                                                    Hiển Thị Trong Danh Mục Liên Quan
                                                @elseif ($pro->status==2)
                                                    Hiển Thị Trong Danh Mục Bạn Có Thể Thích
                                                @elseif ($pro->status==3)
                                                    Hiển Thị Trong Danh Sách Sản Phẩm Mới
                                                @else
                                                    Sản Phẩm Đang Ẩn
                                                @endif
                                            </td>
                                            <td>{{ $pro->created_at }}</td>
                                            <td ><a href="{{ route('product.edit',$pro->id) }}" class="btn btn-info"><i class="fas fa-pen-alt"></i></a>
                                            ||<form style="display: inline" method="POST" alt="Edit" action="{{ route('product.destroy',$pro->id) }}" onsubmit="return ConfirmDelete( this )">
                                                @method('DELETE')
                                                @csrf
                                                <button onclick="return ConfirmDelete();" alt="Delete" class="btn btn-danger" type="submit">Xoá</button>
                                            </form> 
                                        </tr>
                                        @endforeach
                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
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
<script>
    function ConfirmDelete()
    {
      var x = confirm("Bạn có chắc chắn muốn xoá?");
      if (x)
          return true;
      else
        return false;
    }
</script>    
  
@endsection