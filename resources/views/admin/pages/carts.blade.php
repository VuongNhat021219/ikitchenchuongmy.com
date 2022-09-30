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
               
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Dữ Liệu Tìm Được</h4>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th style="width:5%">#</th>
                                            <th >Tên Khách Hàng</th>
                                            <th >Số Điện Thoại</th>
                                            <th >Email</th>
                                            <th >Địa Chỉ</th>
                                            <th >Ghi Chú</th>
                                            <th >Ngày Đặt</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($ttkh as $blo)
                                        
                                        <tr class="text-center">
                                            <th scope="row">{{ $blo->id }}</th>
                                            <td>{{ $blo->name }}</td>
                                            <td>{{ $blo->phone }}</td>
                                            <td>{{ $blo->email }}</td>
                                            <td>{{ $blo->address }}</td>
                                            <td>{{ $blo->content }}</td>
                                            <td>{{ $blo->created_at }}</td>
                                            <td ><a href="{{ route('carts.edit',$blo->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            ||<form style="display: inline" method="POST" alt="Edit" action="{{ route('carts.destroy',$blo->id) }}" onsubmit="return ConfirmDelete( this )">
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
            {{ $ttkh->links() }}



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