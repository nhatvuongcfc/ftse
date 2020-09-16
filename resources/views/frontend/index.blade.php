@extends('templates.frontend.footer')
@extends('templates.frontend.navbar')

@extends('templates.frontend.header')

@section('css')
    
@stop

  @section('content')
      
  
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

  <!--Indicators-->
  <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      <li data-target="#carousel-example-1z" data-slide-to="3"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
          <div class="view" style="background-image: url('{{ asset('image/user/banner1.png') }}'); background-repeat: no-repeat; background-size: cover;">
              <div class="hero__item set-bg" >
                  <div class="container" style="margin-bottom:-30%">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="hero__text">
                                  <h5>KHAI GIẢNG KHÓA</h5>
                                  <h2>LẬP TRÌNH VIÊN<br/> CHUYÊN NGHIỆP</h2>
                                  <p>3/8/2020</p>
                                  <a href="" class="btn btn-register">ĐĂNG KÝ NHẬN TƯ VẤN</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        <div class="carousel-item">
          <div class="view" style="background-image: url('{{ asset('image/user/banner2.png') }}'); background-repeat: no-repeat; background-size: cover;">
              <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                  <div class="container" style="margin-bottom:-30%">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="hero__text">
                                  <h5>KHAI GIẢNG KHÓA NGẮN HẠN</h5>
                                  <h2>LẬP TRÌNH JAVA</h2>
                                  <p>3/8/2020</p>
                                  <a href="/tu-van" class="btn btn-register ">ĐĂNG KÝ NHẬN TƯ VẤN</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="carousel-item ">
          <div class="view" style="background-image: url('{{ asset('image/user/banner1.png') }}'); background-repeat: no-repeat; background-size: cover;">
              <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                  <div class="container" style="margin-bottom:-30%">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="hero__text">
                                  <h5>KHAI GIẢNG KHÓA NGẮN HẠN</h5>
                                  <h2>LẬP TRÌNH PHP</h2>
                                  <p>3/8/2020</p>
                                  <a href="/tu-van" class="btn btn-register">ĐĂNG KÝ NHẬN TƯ VẤN</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="carousel-item ">
          <div class="view" style="background-image: url('{{ asset('image/user/banner2.png') }}'); background-repeat: no-repeat; background-size: cover;">
              <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                  <div class="container" style="margin-bottom:-30%">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="hero__text">
                                  <h5>KHAI GIẢNG KHÓA NGẮN HẠN</h5>
                                  <h2>LẬP TRÌNH FRONT-END</h2>
                                  <p>3/8/2020</p>
                                  <a href="/tu-van" class="btn btn-register ">ĐĂNG KÝ NHẬN TƯ VẤN</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>  
  </div>
  
  
  <section class="text-center ftco-section">    
    <div class="container">
    <!--Grid row-->
      <div class="row justify-content-center  pb-3">
        <div class="col-md-7 heading-section  text-center">
          <h2 class="mb-4">MỤC TIÊU CHƯƠNG TRÌNH</h2>
        </div>
      </div>
      <div id="timeline" class="row mb-4 wow fadeIn">
        <div class="tl-item col">

            <div class="tl-bg" style="background-image: url(https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/119122631_2779290222316315_4265160166795868564_n.jpg?_nc_cat=101&_nc_sid=730e14&_nc_ohc=FPvQJiewPxkAX_fQCOh&_nc_ht=scontent.fdad2-1.fna&oh=6dcd819bea4fb9a64da540903a186cb3&oe=5F7E9559)"></div>

            <div class="tl-year">
                <p class=" tl-text f2 heading--sanSerif">Kiến thức chuyên môn cốt lõi
                </p>
            </div>

            <div class="tl-content">
                <p class="tl-text " style="text-align:justify;">Chương trình đào tạo Fast Track sẽ trang bị cho học viên các kiến thức cốt lõi về công nghệ thông tin, công nghệ phần mềm, nắm rõ về các ngôn ngữ lập trình Java, PHP, lập trình Front End & Back End. Song song với việc học kiến thức chuyên
                    môn, học viên sẽ được trau dồi các kiến thức về kinh tế xã hội, công nghệ mới thông qua các dự án thực tế. Từ đó, tự tin ứng tuyển vào các công ty công nghệ, tập đoàn lớn trên toàn cầu.</p>
                <!-- <p>Suspendisse potenti. Sed sollicitudin eros lorem, eget accumsan risus dictum id. Maecenas dignissim ipsum vel mi rutrum egestas. Donec mauris nibh, facilisis ut hendrerit vel, fringilla sed felis. Morbi sed nisl et arcu.</p> -->
            </div>

        </div>

        <div class="tl-item col">

            <div class="tl-bg" style="background-image: url(https://srv2.imgonline.com.ua/result_img/imgonline-com-ua-cut-image-8I3CVLGA535mzl7E/image_part_002.jpg)"></div>

            <div class="tl-year">
                <p class="f2 heading--sanSerif">2014</p>
            </div>

            <div class="tl-content">
                <p>Mauris cursus magna at libero lobortis tempor. Suspendisse potenti. Aliquam interdum vulputate neque sit amet varius. Maecenas ac pulvinar nisi. Fusce vitae nunc ultrices, tristique dolor at, porttitor dolor. Etiam id cursus arcu, in dapibus
                    nibh. Pellentesque non porta leo. Nulla eros odio, egestas quis efficitur vel, pretium sed.</p>
            </div>

        </div>

        <div class="tl-item col">

            <div class="tl-bg" style="background-image: url(https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/119122631_2779290222316315_4265160166795868564_n.jpg?_nc_cat=101&_nc_sid=730e14&_nc_ohc=FPvQJiewPxkAX_fQCOh&_nc_ht=scontent.fdad2-1.fna&oh=6dcd819bea4fb9a64da540903a186cb3&oe=5F7E9559)"></div>

            <div class="tl-year">
                <p class="f2 heading--sanSerif">2016</p>
            </div>

            <div class="tl-content">
                <p>Suspendisse ac mi at dolor sodales faucibus. Nunc sagittis ornare purus non euismod. Donec vestibulum efficitur tortor, eget efficitur enim facilisis consequat. Vivamus laoreet laoreet elit. Ut ut varius metus, bibendum imperdiet ex. Curabitur
                    diam quam, blandit at risus nec, pulvinar porttitor lorem. Pellentesque dolor elit.</p>
            </div>

        </div>

      </div>
    </div>
</section>
  <section class="ftco-section-3 img bgattachment-fixed" style="background-image: url('{{ asset('image/user/81364031_1265383450318700_1325108822267658240_n.jpg')}}');">
      <div class="overlay"></div>
      <div class="container">
          <div class="row d-md-flex justify-content-center">
              <div class="col-md-9 about-video text-center">
                  <h2 class="">FASTTRACK SE - HỆ THỐNG ĐÀO TẠO LẬP TRÌNH HIỆN ĐẠI</h2>
                  {{--  <div class="video d-flex justify-content-center">
                      <a href="https://vimeo.com/45830194" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
                  </div>  --}}
              </div>
          </div>
      </div>
  </section>

  <section class="ftco-counter bg-light" id="section-counter">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10">
                  <div class="row">
                <div class="col-md-3 d-flex justify-content-center counter-wrap ">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="3">0</strong>
                      <span>Cở sở</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="300">0</strong>
                      <span>Học viên</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="10">0</strong>
                      <span>Mentor</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="10">0</strong>
                      <span>Doanh nghiệp liên kết</span>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      </div>
  </section>

  <section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center  pb-3">
        <div class="col-md-7 heading-section  text-center">
          <h2 class="mb-4">VỀ FASTTRACK SE</h2>
        </div>
      </div>
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-6 col-md-12 mb-6">

            <!--Modal: Name-->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/DSRSOvaziJE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                {{--  <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=3iav-r2NDTE&feature=emb_logo?rel=0&autoplay=1" allowfullscreen></iframe>  --}}
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                        </div>

                    </div>
                    <!--/.Content-->

                </div>
            </div>
            <!--Modal: Name-->

            <a><img class="img-fluid z-depth-1" src="{{ asset('image/user/screen-video-1.png') }}" alt="video" data-toggle="modal" data-target="#modal1"></a>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-6 col-md-6 mb-6">

            <!--Modal: Name-->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3iav-r2NDTE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                {{--  <iframe  src="https://www.youtube.com/watch?v=DSRSOvaziJE"></iframe>  --}}
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                        </div>

                    </div>
                    <!--/.Content-->

                </div>
            </div>
            <!--Modal: Name-->

            <a><img class="img-fluid z-depth-1" src="{{ asset('image/user/video-screen-2.png') }}"video" data-toggle="modal" data-target="#modal2"></a>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
       
        <!-- Grid column -->

    </div>

    </div>
  </section>


  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center  pb-3">
        <div class="col-md-7 heading-section  text-center">
          <h2 class="mb-4">BLOG</h2>
        </div>
      </div>
      <div class="card-container">
        <div class="card card-1">
            <div class="card-img"></div>
            <a href="" class="card-link">
                <div class="card-img-hovered" style="background-image: url('https://media.thethao247.vn/upload/social-thumb-statics/upload/cuongnm/2020/09/05/chinh-thuc-chelsea-chieu-mo-havertz-voi-muc-phi-ki-luc1599262172.jpg');"></div>
            </a>
            <div class="card-info">
                <div class="card-about">
                    <!-- <a class="card-tag tag-news">NEWS</a> -->
                    <div class="card-time">6/11/2018</div>
                </div>
                <h1 class="card-title">There have been big Tesla accident at New Jersey</h1>
                <!-- <div class="card-creator">by <a href="">Sardorbek Usmonov</a></div> -->
            </div>
        </div>
        <div class="card card-2">
            <div class="card-img"></div>
            <a href="" class="card-link">
                <div class="card-img-hovered"></div>
            </a>
            <div class="card-info">
                <div class="card-about">
                    <a class="card-tag tag-news">News</a>
                    <div class="card-time">6/07/2018</div>
                </div>
                <h1 class="card-title">Samsung laptops is exploding again</h1>
                <!-- <div class="card-creator">by <a href="">Tyler Platt</a></div> -->
            </div>
        </div>
        <div class="card card-3">
            <div class="card-img"></div>
            <a href="" class="card-link">
                <div class="card-img-hovered"></div>
            </a>
            <div class="card-info">
                <div class="card-about">
                    <a class="card-tag tag-deals">Deals</a>
                    <div class="card-time">5/27/2018</div>
                </div>
                <h1 class="card-title">Apple is having big Sale for the first time</h1>
            </div>
        </div>

    </div>
    

    </div>
  </section>
  
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center  pb-3">
        <div class="col-md-7 heading-section  text-center">
          <h2 class="mb-4">CHƯƠNG TRÌNH ĐÀO TẠO</h2>
        </div>
      </div>
      <div class="card-container">
        <div class="owl-carousel owl-theme card-khs-list">
                <!-- card-kh -->
                @foreach ($programs as $item)
                    <div class="card-kh ">
                            
                        <div class="card_image">  
                            <a href="{{route('user.program',$item->slug)}}">
                                 <img src="{{ $item->image }}" /></a> 
                        </div>
                        <div class=" title-white" style="position:relative; z-index:1000">
                            <a href="{{route('user.program',$item->slug)}}">
                                
                                <p class="card_title title-white">{{ $item->name }}</p>
                            </a>
                        </div>
                    </div> 
                @endforeach
            </div>
            
        </div>
    </div>
    

  </section>

  @endsection
  
  @section('js')
    <script>
            $(document).ready(function() {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    items: 3,
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 1500,
                    autoplayHoverPause: true,
                    smartSpeed: 200
                });
                owl.on('mousewheel', '.owl-stage', function(e) {
                    if (e.deltaY > 0) {
                        owl.trigger('next.owl');
                    } else {
                        owl.trigger('prev.owl');
                    }
                    e.preventDefault();
                });
            })
        </script>
  @stop
  