
<div class="container-phone">
    <div class="back-circle-phone"></div>
    <div class="button-phone"></div>
    <div class="front-circle-phone"></div>
    <i class="fa fa-phone phone"></i>
</div>
<div class="button-advisory"  aria-label="Liên hệ tư vấn" onclick="showModalAdvisory()">
Liên hệ tư vấn
</div>
<div class="container-advisory">
    <div class="content-advisory">
      <img class="btn-close close-advisory" src="{{ asset('/image/user/cancel.svg') }}"></img>
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


  
  <!-- Modal -->
  {{--  <div class="modal fade" id="advisory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>  --}}
<div class="container-zalo">
    <div class="back-circle-zalo"></div>
    <div class="button-zalo"></div>
    <div class="front-circle-zalo"></div>
    <img class="zalo" src="{{ asset('/image/user/zalo.svg') }}"></img>
    <div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Chào mừng đến với Fast Track SE.Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>
</div>

<div class="container-messenger">
    
    <div class="back-circle-messenger"></div>
    <div class="button-messenger"></div>
    <div class="front-circle-messenger"></div>
    <img class="messenger" src="{{ asset('/image/user/facebook-messenger.svg') }}"></img>
</div>
<footer id="footer" class="footer" style="background:#D63628">
        <div class="wf-wrap">
            <div class="wf-container-footer">
                <div class="wf-container">
                    <section id="nav_menu-3" class="widget widget_nav_menu wf-cell wf-1-4">
                        <div class="widget-title">THÔNG TIN LIÊN HỆ</div>

                        <div class="menu-footer-link-container">
                            <ul id="menu-services" class="menu">
                                <li id="menu-item-3301" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3301"><a href=""><i class="icon icon-envelope"></i> contact@fasttrack.edu.vn</a></li>
                                <li id="menu-item-3298" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3298"><a href="https://fasttrack.edu.vn/khoa-hoc-lap-trinh-java/"><i class="icon icon-phone"></i> 0896204185 </a></li>
                                <li id="menu-item-3299" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3299"><a href="https://fasttrack.edu.vn/khoa-hoc-lap-trinh-php/"><i class="icon icon-map-marker"></i> 65 Chu Mạnh Trinh, Khuê Trung, Cẩm Lệ, Đà Nẵng</a></li>
                            </ul>
                        </div>
                        <div class="social-footer">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-google"></a>
                                <a href="#" class="fa fa-youtube"></a>
                            </div>
                    </section>
                    <section id="nav_menu-3" class="widget widget_nav_menu wf-cell wf-1-4">
                        <div class="widget-title">LIÊN KẾT</div>
                        <div class="menu-footer-link-container">
                            <ul id="menu-footer-link" class="menu">
                                <li id="menu-item-3092" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3092"><a href="https://fasttrack.edu.vn/">Trang chủ</a></li>
                                <li id="menu-item-3093" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3093"><a href="https://fasttrack.edu.vn/ve-chung-toi/">Về chúng tôi</a></li>
                                <li id="menu-item-3139" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3139"><a href="https://fasttrack.edu.vn/category/khoa-hoc/">Khóa học</a></li>
                                <li id="menu-item-3302" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3302"><a href="https://fasttrack.edu.vn/lich-khai-giang/">Lịch khai giảng</a></li>
                                <li id="menu-item-3094" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3094"><a href="https://fasttrack.edu.vn/blog/">Blog</a></li>
                                <li id="menu-item-3095" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3012 current_page_item menu-item-3095"><a href="https://fasttrack.edu.vn/lien-he/" aria-current="page">Liên Hệ</a></li>
                            </ul>
                        </div>
                    </section>
                    <section id="nav_menu-4" class="widget widget_nav_menu wf-cell wf-1-4">
                        <div class="widget-title">KHÓA HỌC</div>
                        <div class="menu-services-container">
                            <ul id="menu-services" class="menu">
                                <li id="menu-item-3301" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3301"><a href="https://fasttrack.edu.vn/lap-trinh-fullstack/">Lập trình Fullstack</a></li>
                                <li id="menu-item-3298" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3298"><a href="https://fasttrack.edu.vn/khoa-hoc-lap-trinh-java/">Lập trình Java</a></li>
                                <li id="menu-item-3299" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3299"><a href="https://fasttrack.edu.vn/khoa-hoc-lap-trinh-php/">Lập trình PHP</a></li>
                                <li id="menu-item-3297" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3297"><a href="https://fasttrack.edu.vn/khoa-hoc-lap-trinh-net/">Lập trình .Net</a></li>
                                <li id="menu-item-3300" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3300"><a href="https://fasttrack.edu.vn/khoc-hoc-lap-trinh-front-end-development/">Lập trình Front-End</a></li>
                                <li id="menu-item-3296" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3296"><a href="https://fasttrack.edu.vn/lap-trinh-nen-tang-backend/">Lập trình nền tảng Back-End</a></li>
                            </ul>
                        </div>
                    </section>
                    <section id="custom_html-3" class="widget_text widget widget_custom_html wf-cell wf-1-4">
                        <div class="widget-title">THEO DÕI CHÚNG TÔI</div>
                        <div class="textwidget custom-html-widget">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=199873534081859&autoLogAppEvents=1"></script>
                            <div class="fb-page" data-href="https://www.facebook.com/fasttrack.edu.vn" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/fasttrack.edu.vn" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fasttrack.edu.vn">Fast Track SE</a></blockquote>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- .wf-container -->
            </div>
            <!-- .wf-container-footer -->
        </div>
        <!-- .wf-wrap -->


        <!-- !Bottom-bar -->
        <div id="bottom-bar" class="solid-bg logo-center" style="background:#D63628">
            <div class="wf-wrap">
                <div class="wf-container-bottom">


                    <div class="wf-float-right">

                        <div class="bottom-text-block">
                            <p>Copyright © 2020 Nhất Vương</p>
                        </div>
                    </div>

                </div>
                <!-- .wf-container-bottom -->
            </div>
            <!-- .wf-wrap -->
        </div>
        <!-- #bottom-bar -->
    </footer>



<script src="{{ asset('vendor/js/popper.min.js') }}"></script>


<script src="{{ asset('vendor/js/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('vendor/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('vendor/js/popper.min.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('vendor/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/js/jquery.stellar.min.js') }}"></script>
{{--  <script src="{{ asset('vendor/js/owl.carousel.min.js') }}"></script>  --}}
<script src="{{ asset('vendor/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendor/js/aos.js') }}"></script>
<script src="{{ asset('vendor/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('vendor/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('vendor/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('vendor/js/google-map.js') }}"></script>
<script src="{{ asset('vendor/js/main.js') }}"></script>
<script src="{{ asset('vendor/js/mdb.min.js') }}"></script>
<script src="{{ asset('js/user/main.js') }}"></script>
<script src="{{ asset('js/user/index.js') }}"></script>
<script src="{{ asset('/owlcarousel/owl.carousel.min.js')  }}"></script>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="1132637973498321"
  theme_color="#0084ff">
      </div>
<script type="text/javascript">
  // Animations initialization
  new WOW().init();
</script>

@yield('js')

    
</body>

</html>