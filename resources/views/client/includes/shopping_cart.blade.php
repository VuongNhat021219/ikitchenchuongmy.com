<!-- breadcrumb -->
<div class="container abc">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Giỏ Hàng
        </span>
    </div>
</div>

<!-- Shoping Cart -->
<form class="bg0 p-t-75 p-b-85 border-bottom border-danger desptop_cart " method="POST">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-xl-7 m-lr-auto m-b-50 ">
                @if (count($product) != 0)
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">

                            @php
                                $total = 0;
                                
                            @endphp
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Product</th>
                                    <th class="column-2">Tên Sản Phẩm</th>
                                    <th class="column-3">Giá </th>
                                    <th class="column-4">Số Lượng Sản Phẩm</th>
                                    <th class="column-5">Tổng Tiền</th>
                                    <th class="">Action</th>
                                </tr>

                                @foreach ($product as $pro)
                                    @php
                                        $priceEnd = $pro->price_sale * $carts[$pro->id];
                                        $total += $priceEnd;
                                    @endphp
                                    <tr class="table_row">
                                        <td class="column-1">
                                            <div class="how-itemcart1">
                                                <img src="uploads/images/{{ $pro->image }}" alt="IMG">
                                            </div>
                                        </td>
                                        <td class="column-2" style="font-size: 12px">{{ $pro->name }}</td>
                                        <td class="column-3"style="font-size: 12px">
                                            {{ number_format($pro->price_sale) }}<sup>vnđ</sup> </td>
                                        <td class="column-4">
                                            <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                </div>

                                                <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                    name="num_product[{{ $pro->id }}]"
                                                    value="{{ $carts[$pro->id] }}">

                                                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="column-5"style="font-size: 12px">
                                            {{ number_format($priceEnd) }}<sup>vnđ</sup></td>
                                        <td><a href="{{ route('pro.deletecard', $pro->id) }}"
                                                class="btn btn-danger m-r-50">Xoá</a></td>
                                    </tr>
                                @endforeach


                            </table>

                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">


                            </div>

                            <input type="submit" value="Cập Nhật Giỏ Hàng" formaction="{{ route('pro.updatecard') }}"
                                class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">

                            @csrf
                        </div>
                    </div>

            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class=" cl2 p-b-10">
                        Tổng Đơn Hàng
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">

                    </div>


                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208 ">
                            <span class="mtext-101 bor12">
                                Tổng Tiền:
                            </span>
                        </div>

                        <div class="size-209 p-t-1">
                            <span class="mtext-110 cl2 m-l-2" style="color: red">
                                {{ number_format($total) }}<sup>vnđ</sup>
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('pro.checkout') }}"
                        class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Xác Nhận
                    </a>
                </div>
            </div>
        @else
            <h3 class="text-center cl6 ">----Giỏ Hàng Trống----</h3>
            @endif
        </div>
    </div>
</form>

<!-- Shoping Cart mobile-->
<form class="bg0 p-t-75 p-b-85 border-bottom border-danger mobile_cart" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-xl-7 m-lr-auto m-b-50 ">
                @if (count($product) != 0)

                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">

                            @php
                                $total = 0;
                                
                            @endphp

                            </tr>
                            <h1 class=" cl2 p-b-10">
                                Đơn Hàng Của Bạn
                            </h1>
                            @foreach ($product as $key => $pro)
                                @php
                                    $priceEnd = $pro->price_sale * $carts[$pro->id];
                                    $total += $priceEnd;
                                @endphp




                                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">


                                        <div class="flex-w flex-t p-t-27 p-b-33">
                                            <div class="size-208 ">
                                                <span class="mtext-101 bor12">
                                                    Sản Phẩm Số:
                                                </span>
                                            </div>


                                            <div class="size-209 p-t-1">
                                                <span class="mtext-110 cl2 m-l-2" style="color: red">
                                                    {{ $key + 1 }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-w flex-t p-t-27 p-b-33">
                                            <div class="size-208 ">
                                                <span class="mtext-101 bor12">
                                                    Tên Sản Phẩm:
                                                </span>
                                            </div>


                                            <div class="size-209 p-t-1">
                                                <span class="mtext-110 cl2 m-l-2">
                                                    {{ $pro->name }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-w flex-t p-t-27 p-b-33">
                                            <div class="size-208 ">
                                                <span class="mtext-101 bor12">
                                                    Ảnh Sản Phẩm:
                                                </span>
                                            </div>


                                            <div class="size-209 p-t-1">
                                                <span class="mtext-110 cl2 m-l-2" style="color: red">

                                                    <img src="uploads/images/{{ $pro->image }}" width="200px"
                                                        height="120px" alt="IMG">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-w flex-t p-t-27 p-b-33">
                                            <div class="size-208 ">
                                                <span class="mtext-101 bor12">
                                                    Số Lượng:
                                                </span>
                                            </div>


                                            <div class="size-209 p-t-1">
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                    </div>

                                                    <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                        name="num_product[{{ $pro->id }}]"
                                                        value="{{ $carts[$pro->id] }}">

                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-w flex-t p-t-27 p-b-33">
                                            <div class="size-208 ">
                                                <span class="mtext-101 bor12">
                                                    Tổng Tiền Sản Phẩm:
                                                </span>
                                            </div>


                                            <div class="size-209 p-t-1">
                                                <span class="mtext-110 cl2 m-l-2" style="color: red">

                                                    <label for=""
                                                        style="font-size: 20px">{{ number_format($priceEnd) }}<sup>vnđ</sup></label>
                                                </span>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            @endforeach



                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">


                            <input type="submit" value="Cập Nhật Giỏ Hàng"
                                formaction="{{ route('pro.updatecard') }}"
                                class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">

                            @csrf
                        </div>
                    </div>

            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class=" cl2 p-b-10">
                        Tổng Đơn Hàng
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">

                    </div>


                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208 ">
                            <span class="mtext-101 bor12">
                                Tổng Tiền:
                            </span>
                        </div>

                        <div class="size-209 p-t-1">
                            <span class="mtext-110 cl2 m-l-2" style="color: red">
                                {{ number_format($total) }}<sup>vnđ</sup>
                            </span>
                        </div>
                    </div>

                    <a href="{{ route('pro.checkout') }}"
                        class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Xác Nhận
                    </a>
                </div>
            </div>
        @else
            <h3 class="text-center cl6 ">----Giỏ Hàng Trống----</h3>
            @endif
        </div>
    </div>
</form>
