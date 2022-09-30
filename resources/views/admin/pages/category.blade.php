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
                        <h4 class="page-title">Hiển Thị Danh Mục</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Quản Lý Danh Mục</a></li>
                                <li class="breadcrumb-item active">Hiển Thị Danh Mục</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('category.create') }}" class="btn btn-info float-right m-2">Thêm Nhanh</a>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Dữ Liệu Tìm Được</h4>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Tên Danh Mục</th>
                                            <th>Ngày Thêm</th>
                                            <th>Ngày Update</th>
                                            <th style="width:25%" >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $cate)
                                            
                                        <tr class="text-center">
                                            <th scope="row">{{ $cate->id }}</th>
                                            <td>{{ $cate->name }}</td>
                                            <td>{{ $cate->created_at }}</td>
                                            <td>{{ $cate->updated_at }}</td>
                                            <td ><a href="{{ route('category.edit',$cate->id) }}" class="btn btn-info"><i class=" fas fa-pen-square"></i></a>
                                            ||<form style="display: inline" method="POST" alt="Edit" action="{{ route('category.destroy',$cate->id) }}" onsubmit="return ConfirmDelete( this )">
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
                    {{ $category->links() }}
                    
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