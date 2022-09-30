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
                        <h4 class="page-title">Hiển Thị Các Bài Viết</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Quản Lý Bài Viết</a></li>
                                <li class="breadcrumb-item active">Hiển Thị Bài Viết</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('blog.create') }}" class="btn btn-info float-right m-2">Thêm Nhanh</a>
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
                                            <th >Tên Bài Viết</th>
                                            <th >Ảnh Bài Viết</th>
                                            <th >Danh Mục</th>
                                            <th >Ngày Tạo</th>
                                            <th >Ngày Cập Nhật</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($blog as $blo)
                                        
                                        <tr class="text-center">
                                            <th scope="row">{{ $blo->id }}</th>
                                            <td>{{ $blo->title }}</td>
                                            <td>  <img src="uploads/images/{{ $blo->image}}" width="100px" height="100px" > </td>

                                            <td>
                                                @if ($blo->danhmucbaiviet==0)
                                                        Sản Phẩm Đang Ẩn
                                                @elseif ($blo->danhmucbaiviet==1)
                                                    Thuộc Danh Mục Bài Viết Vào Bếp
                                                @elseif ($blo->danhmucbaiviet==2)
                                                    Thuộc Danh Mục Bài Viết Hướng Dẫn Sử Dụng
                                                @elseif ($blo->danhmucbaiviet==3)
                                                    Thuộc Danh Mục Bài Viết Vào Sản Phẩm Mới Ra Mắt
                                                @elseif ($blo->danhmucbaiviet==4)
                                                    Thuộc Danh Mục Bài Viết Tin Tức
                                                @elseif ($blo->danhmucbaiviet==5)
                                                    Thuộc Danh Mục Bài Viết Xe Cộ
                                                @elseif ($blo->danhmucbaiviet==6)
                                                    Thuộc Danh Mục Bài Viết Phái Đẹp
                                                @elseif ($blo->danhmucbaiviet==7)
                                                Thuộc Danh Mục Bài Viết Thế Giới
                                                @elseif ($blo->danhmucbaiviet==8)
                                                Thuộc Danh Mục Bài Viết Kinh Doanh
                                                @elseif ($blo->danhmucbaiviet==9)
                                                Thuộc Danh Mục Bài Viết Giáo Dục
                                                @elseif ($blo->danhmucbaiviet==10)
                                                Thuộc Danh Mục Bài Viết Chuyện Lạ
                                                @else
                                                     Khác
                                                @endif
                                            </td>
                                            <td>{{ $blo->created_at }}</td>
                                            <td>{{ $blo->updated_at }}</td>
                                            <td ><a href="{{ route('blog.edit',$blo->id) }}" class="btn btn-info"><i class="fas fa-pen-alt"></i></a>
                                            ||<form style="display: inline" method="POST" alt="Edit" action="{{ route('blog.destroy',$blo->id) }}" onsubmit="return ConfirmDelete( this )">
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
            {{ $blog->links() }}



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