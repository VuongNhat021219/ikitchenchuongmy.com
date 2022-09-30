<div class="container m-t-100 m-b-50">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Vui Lòng Điền Thông Tin Của Bạn</h4>
    
                    <form class="parsley-examples" action="{{ route('pro.createCheckout') }}" method="POST" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="userName">Tên Khách Hàng<span class="text-danger">*</span></label>
                            <input type="text" name="name" parsley-trigger="change" required="" placeholder="Nhập Tên Khách Hàng...." class="form-control" id="userName">
                        </div>
                        @error('name')
                        <li class="alert alert-danger">{{ $message }}</li>
                         @enderror
                        <div class="form-group">
                            <label for="emailAddress">Số Điện Thoại<span class="text-danger">*</span></label>
                            <input type="text" name="phone" parsley-trigger="change" required="" placeholder="Số Điện Thoại Khách Hàng..." class="form-control" id="emailAddress">
                        </div>
                        @error('phone')
                        <li class="alert alert-danger">{{ $message }}</li>
                         @enderror
                        <div class="form-group">
                            <label for="emailAddress">Gmail<span class="text-danger">*</span></label>
                            <input type="email" name="email" parsley-trigger="change" required="" placeholder="Email Khách Hàng..." class="form-control" id="emailAddress">
                        </div>
                        @error('email')
                        <li class="alert alert-danger">{{ $message }}</li>
                         @enderror
                        <div class="form-group">
                            <label for="pass1">Địa Chỉ Giao Hàng<span class="text-danger">*</span></label>
                            <input id="pass1" type="text" name="address" placeholder="Địa Chỉ Khách Hàng..." required="" class="form-control">
                        </div>
                        @error('address')
                        <li class="alert alert-danger">{{ $message }}</li>
                         @enderror
                        <div class="form-group">
                          <label for="">Ghi Chú<span class="text-danger">*</span></label>
                          <textarea class="form-control" name="content" id="" rows="3">Ghi Chú</textarea>
                        </div>
                        <div class="form-group">
                            <div class="checkbox checkbox-purple">
                                <input id="checkbox6a" type="checkbox" checked="" value="1" data-parsley-multiple="checkbox6a">
                                <label for="checkbox6a">
                                    Thanh Toán Khi Nhận Hàng<span  class="text-danger">*</span>
                                </label>
                            </div>

                        </div>
                        
                        <div class="form-group text-right mb-0">
                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                Xác Nhận
                            </button>
                            <a href="{{ route('pro.showcard') }}" type="reset" class="btn btn-secondary waves-effect waves-light">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    
       
        <!-- end col -->
    </div>
</div>