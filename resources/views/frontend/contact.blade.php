@extends('templates.user.footer')
@extends('templates.user.navbar')
@extends('templates.user.header')
@section('css')
<style>
    .navbar {
        background-image: url("https://fasttrack.edu.vn/wp-content/uploads/2019/11/header-bg.jpg");
    }
</style>
@endsection
@section('content')
<section class="ftco-section-3 m-t-83 img" style="  background-attachment: fixed;
background-image: url('{{ asset('image/user/bg-contact.png')}}');">
    <div class="container">
        <div class="row d-md-flex justify-content-center">
            <div class="col-md-9  text-center">
                <h1 class="text-black">LIÊN HỆ VỚI FASTTRACK</h1>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section testimony-section" style="padding:4em 0">

<div class="container " >
  <div class="row">
    <div class="col-md-12 col-lg-6"></div>
    <div class="col-md-12 col-lg-6">
      <h2 class="text-black">ĐĂNG KÝ NHẬN TƯ VẤN</h2>

      <div class="form-group">
        <input type="text" class="form-control" id="exampleInputEmail1" autofocus aria-describedby="emailHelp" placeholder="Họ và tên">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" autocomplete="on">
      </div>
      <div class="form-group">
        <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Số điện thoại">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6 col">
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">Nam</label><br>
        </div>
        <div class="form-group col-md-6 col">
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Nữ</label><br>
        </div>
      </div>
      <div class="form-group">
        <select class="browser-default custom-select">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>
      <div class="form-group">
        <textarea placeholder="Nội dung yêu cầu"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-register">ĐĂNG KÝ</button>
      
    
    </div>
  </div>
   
      
</div>

</section>
@endsection