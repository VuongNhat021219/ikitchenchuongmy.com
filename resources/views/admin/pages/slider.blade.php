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
                        <h4 class="page-title">Hiển Thị Slider</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Quản Lý Slider</a></li>
                                <li class="breadcrumb-item active">Hiển Thị Slider</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('slider.create') }}" class="btn btn-info float-right m-2">Thêm Nhanh</a>
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
                                            <th style="width:10%">Tên </th>
                                            <th style="width:10%">Tên Phụ </th>
                                            <th style="width:5%">URL</th>
                                            <th>Ảnh </th>
                                            <th style="width:5%">Trạng Thái</th>
                                            <th style="width:10%">Ngày Tạo</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($slider as $pro)
                                        
                                        <tr class="text-center">
                                            <th scope="row">{{ $pro->id }}</th>
                                            <td>{{ $pro->name }}</td>
                                            <td>{{ $pro->name_sub }}</td>
                                            <td>{{ $pro->url }}</td>
                                            <td>  <img src="uploads/images/{{ $pro->thumb}}" width="100px" height="100px" alt="{{ $pro->thumb}}"> </td>
                                            <td>
                                                @if ($pro->active==0)
                                                    Ẩn
                                                @else
                                                    Đang Hiển Thị
                                                @endif
                                            </td>
                                            <td>{{ $pro->created_at }}</td>
                                            <td ><a href="{{ route('slider.edit',$pro->id) }}" class="btn btn-info"><i class="fas fa-pen-alt"></i></a>
                                            ||<form style="display: inline" method="POST" alt="Edit" action="{{ route('slider.destroy',$pro->id) }}" onsubmit="return ConfirmDelete( this )">
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
                {{ $slider->links() }}
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