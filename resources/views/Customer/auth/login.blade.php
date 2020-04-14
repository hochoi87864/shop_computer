@extends('customer.layout.master')
@section('content')
<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30 mx-auto">
    <!-- Login Form s-->
    <form method="POST" >
        @csrf
        <div class="login-form">
            <h4 class="login-title">Đăng nhập</h4>
                @if (Session::has('errorlogin'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Lỗi!</strong> Sai tài khoản hoặc mật khẩu.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (Session::has('needLogin'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Cảnh báo!!!</strong> Cần đăng nhập sử dụng chức năng này.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            <div class="row">
                <div class="col-md-12 col-12 mb-20">
                    <label>Địa chỉ Email*</label>
                    <input class="mb-0" type="email" name="email" placeholder="Nhập địa chỉ email...">
                </div>
                <div class="col-12 mb-20">
                    <label>Mật khẩu</label>
                    <input class="mb-0" type="password" name="password" placeholder="Nhập mật khẩu...">
                </div>
                <div class="col-md-8">
                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                        <input type="checkbox" id="remember_me">
                        <label for="remember_me">Nhớ mật khẩu</label>
                    </div>
                </div>
                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                    <a href="#"> Quên mật khẩu?</a>
                </div>
                <div class="col-md-12">
                    <button class="register-button mt-0">Đăng nhập</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection