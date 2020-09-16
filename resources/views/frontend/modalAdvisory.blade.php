<div class="container-advisory">
    <img class="btn-close close-advisory" src="{{ asset('/image/user/cancel.svg') }}"></img>
      <div class="content-advisory">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Họ và tên">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
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
          <button type="submit" class="btn btn-danger">Gửi</button>
        </form>
        <!-- Default form contact -->
      </div>
  </div>
  @section('js')
  $(".close-advisory").on('click', function() {
    $(".navbar").css("display", "block");
    $(".button-advisory").css('display', 'block');
    $(".container-advisory").removeClass('show');
});    
  @endsection
  