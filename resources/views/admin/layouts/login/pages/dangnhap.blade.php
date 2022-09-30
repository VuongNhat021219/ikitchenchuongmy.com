@extends('admin.layouts.login.logins')
@section('content')
<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mt-4">
                    <div class="card-header p-4 bg-img1 ">
                        <h4 class="text-white text-center mb-0 mt-0">
                            <img src="clients/images/icons/ikitchen-giai-phap-tong-the-khong-gian-bep.png" alt=""
                            height="100" width="150">
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login.store') }}" method="POST"  class="p-2">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email Address :</label>
                                <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="abc@gmail.com">
                            </div>
                            @error('email')
                                <li class="alert alert-danger">{{ $message}}</li>
                             @enderror

                             


                            <div class="form-group mb-3">
                                <label for="password">Password :</label>
                                <input class="form-control" name="password" type="password" required="" id="password" placeholder="Mật Khẩu Của Bạn">
                            </div>
                            @error('password')
                                <li class="alert alert-danger">{{ $message }}</li>
                            @enderror


                            <div class="form-group mb-4">
                                <div class="checkbox checkbox-success">
                                    <input id="remember" name="remember" type="checkbox" checked="">
                                    <label for="remember">
                                        Remember me
                                    </label>
                                    <a href="pages-recoverpw.html" class="text-muted float-right">Forgot your password?</a>
                                </div>
                            </div>

                            <div class="form-group row text-center mt-4 mb-4">
                                <div class="col-12">
                                    <button class="btn btn-md btn-block btn-primary waves-effect waves-light" type="submit">Sign In</button>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted mb-0">Don't have an account? <a href="pages-register.html" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->

                <!-- end row -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
</div>
@endsection