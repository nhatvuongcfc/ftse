@extends('templates.frontend.footer')
@extends('templates.frontend.navbar')

@extends('templates.frontend.header')
@section('css')
<link rel="stylesheet" href="{{ asset('css/user/login.css') }}">
<style>
    .navbar {
        background-image: url("https://fasttrack.edu.vn/wp-content/uploads/2019/11/header-bg.jpg");
    }
</style>
@endsection
@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('image/user/istockphoto-876522346-1024x1024.jpg');margin-top:3%;">
        <div class="wrap-login100">
            <form method="post" action="{{ url('dang-nhap') }}" enctype="multipart/form-data">
                @csrf
                <div class="content" style="padding:2% 55px 2% 55px;">
                    <span class="login100-form-logo">
                        <img class="logo-image sizefull" src="{{ asset('image/user/logo-img.png') }}" alt="">
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="email" name="email" placeholder="Email" value="{{ old('email')}}" >
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        {{--  @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  --}}
                        @if ($errors->has('email'))
                        
                          <p style="color:#D63628">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" id="inputPassword" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        <div class="toogle-password">
                            <i onclick"tooglePassword(this)" id="icon-eye-password" class="fa fa-eye-slash" style="cursor: pointer"></i>
                        </div>
                        {{--  @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  --}}
                        @if ($errors->has('password'))
                            <p style="color:#D63628">{{ $errors->first('password') }}</p>

                          @endif
                    </div>
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            LOGIN
                        </button>
                    </div>
                    <div class="text-center p-t-10  ">
                        <a class="txt1" style="color: #333" href="#">
                        Forgot Password?
                        </a>
                    </div>
                </div>
            </form>
       </div>
    </div>
</div>
@endsection