@extends('templates.user.footer')
@extends('templates.user.navbar')

@extends('templates.user.header')
@section('content')
<div>
    
<div class="container-login" >
    <div class="content-login">
    <a  class="btn-close btn-close-login " ><span>&#10006</span></a>

    <div class="wrap-login" style="background-image:url('{{ asset('image/user/bg-login.png') }}');">

        <form  method="POST" action="{{ route('login') }}" class="login-form validate-form">
            @csrf
            <span class="login-form-logo">
                <img class="logo-image sizefull" src="{{ asset('image/user/logo-img.png') }}" alt="">
            </span>

            <span class="login-form-title p-b-34 p-t-27">
                Log in
            </span>

            <div class="wrap-input validate-input" data-validate = "Enter username">
                <input class="input input-email @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email" placeholder="Email">
                  <span class="focus-input" data-placeholder="&#xf207;"></span>  --}}
                 @error('email') 
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong> 
                </span>
             @enderror 
            </div>

            <div class="wrap-input validate-input" data-validate="Enter password">
                <input class="input-password input @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" name="password" required autocomplete="current-password">
                
                <div class="toogle-password">
                    <i id="icon-eye-password" class="fa fa-eye-slash" style="cursor: pointer"></i>
                   </div>
                 @error('password') 
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong> 
                </span>
             @enderror 
            </div>

            <div class="contact-form-checkbox">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultChecked2" >
                    <label class="custom-control-label" for="defaultChecked2">Remember me</label>
                  </div>
            </div>

            <div class="container-login-form-btn">
                <div class="login-form">
                    <button type="submit" class="login-form-btn">
                        Login
                    </button>
                </div>
                <div class="forget-form">
                    @if (Route::has('password.request'))
                                <a class=" btn-forget" href="{{ route('password.request') }}">
                                    Quên mật khẩu
                                </a>
                            @endif
                </div>
                
                            
            </div>

             <div class="text-center p-t-30">

              
            </div>
        </form>
    </div>
</div>
</div>
@endsection