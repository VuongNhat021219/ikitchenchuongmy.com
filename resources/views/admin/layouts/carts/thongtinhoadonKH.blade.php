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
                            <h4 class="page-title">Hiển Thị Chi Tiết Đơn hàng</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item active">Hiển Thị Chi Tiết Đơn hàng</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-lg-10">
                        <div class="customer">
                            <div class="form-group">
                                <ul class="m-2">
                                    <li>Tên Khách Hàng:<strong>{{ $ttkh->name }}</strong></li>
                                    <li>Số Điện Thoại:<strong>{{ $ttkh->phone }}</strong></li>
                                    <li>Địa Chỉ:<strong>{{ $ttkh->address }}</strong></li>
                                    <li>Email:<strong>{{ $ttkh->email }}</strong></li>
                                    <li>Ghi Chú:<strong>{{ $ttkh->content }}</strong></li>
                                    <li>Ngày Tạo Đơn:<strong>{{ $ttkh->created_at }}</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('carts.index') }}" class="btn btn-danger">Quay Lại</a>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="m-l-25 m-r--38 m-lr-0-xl">
                                <div class="wrap-table-shopping-cart">

                                    @php
                                        $total = 0;
                                        
                                    @endphp
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-dark">
                                                <tr class="table_head">
                                                    <th class="column-1 ">ID Sản Phẩm</th>
                                                    <th class="column-1">Hình Ảnh</th>
                                                    <th class="column-2">Tên Sản Phẩm</th>
                                                    <th class="column-3">Giá </th>
                                                    <th class="column-4">Số Lượng Sản Phẩm</th>
                                                    <th class="column-5">Thành Tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ttgh as $pro)
                                                    @php
                                                        $priceEnd = $pro->price * $pro->qty;
                                                        $total += $priceEnd;
                                                    @endphp
                                                    <tr class="table_row m-5">
                                                        <td class="column-2 " style="font-size: 20px">{{ $pro->product->id }}</td>

                                                        <td class="column-1">
                                                            <div class="how-itemcart1">
                                                                <img src="uploads/images/{{ $pro->product->image }}" width="80px" height="80px" alt="IMG">
                                                            </div>
                                                        </td>
                                                        <td class="column-2" style="font-size: 12px">{{ $pro->product->name }}</td>
                                                        <td class="column-3"style="font-size: 12px">
                                                            {{ number_format($pro->price) }}<sup>vnđ</sup> </td>
                                                        <td class="column-3"style="font-size: 12px">
                                                            {{ $pro->qty }}<sup>Sản Phẩm</sup> </td>
                                                   
                                                        <td class="column-5"style="font-size: 12px">
                                                            {{ number_format($priceEnd) }}<sup>vnđ</sup></td>
                                                    </tr>
                                                @endforeach
                                                    <tr>
                                                        <td colspan="5" style="font-weight: bold" class="text-right">Tổng Tiền:</td>
                                                        <td style="color: red">{{ number_format($total) }}<sup>vnđ</sup></td>
                                                    </tr>
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
                {{-- {{ $ttkh->links() }} --}}



            </div>
            <!-- end container-fluid -->

        </div>
        <!-- end content -->




        <!-- end Footer -->

    </div>
@endsection

@section('js')
    <script>
        function ConfirmDelete() {
            var x = confirm("Bạn có chắc chắn muốn xoá?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
@endsection
