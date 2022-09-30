@extends('client.master.index')
@section('css')
    
@endsection
@section('content')
  <div class="container m-t-100 m-b-100">
    <div class="row">
      <div class="col-md-8 col-lg-9 p-b-80 border-top border-danger">
       <h2 class="text-center cl2 p-t-10"><span style="color: red">Đặt Hàng Thành Công!</span> <br>Chúng tôi sẽ liên hệ cho bạn sớm nhất,Cảm ơn khách hàng đã tin tưởng và lựa chọn sản phẩm của chúng tôi...!</h2>
       <a href="{{ route('home.index')}}" style="margin-left: 40%" class="btn text-center btn-danger m-t-10">Về Trang Chủ</a>
      </div>
      @include('client.layouts.blog_sub_right')
    </div>
  </div>
  
@endsection

@section('js')
@endsection