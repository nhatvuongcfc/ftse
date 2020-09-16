@extends('templates.frontend.footer')
@extends('templates.frontend.navbar')

@extends('templates.frontend.header')
@section('css')
<link rel="stylesheet" href="{{ asset('css/user/blog.css') }}">
<style>
    .navbar {
        background-image: url("https://fasttrack.edu.vn/wp-content/uploads/2019/11/header-bg.jpg");
    }
</style>

@section('content')
<div class="page-header" id="post-header" style="height: 500px">
    {{--  <div class="thumb page-header-bg" style="background-image: url('{{ $category->image }}')" data-stellar-background-ratio="0.5">  --}}
    {{--  </div>  --}}
    <div class="page-header-bg" style="background-image: url('{{ $category->image }}');" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 text-center">
                <h1 class="text-uppercase">{{ $category->name }}</h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                @foreach ($blogs as $key=> $item)
                    @if($key==0)
                        <div class="post post-thumb" style="height: 400px">
                            <a class="post-img" href="{{ route('user.blog.show',$item->slug) }}">
                                {{--  <img src="{{ $item->image }}" alt="">  --}}
                                <div class="thumb" style="background-image: url('{{ $item->image }}')">

                                </div>
                            </a>
                            <div class="post-body">
                            <div class="post-category">
                                    <a href="{{ route('user.category',$item->category->slug) }}">{{ $item->category->name }}</a>
                                </div>
                                <h3 class="post-title title-lg"><a href="{{ route('user.blog.show',$item->slug) }}">{{ $item->title }}</a></h3>
                                <ul class="post-meta">
                                    <li><a href="author.html">{{ $item->user->name }}</a></li>
                                    <li>
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}
                                    </li>
                                </ul>
                            </div>
                        </div>  
                    @else
                        <div class="post post-row">
                            <a class="post-img" href="{{ route('user.blog.show',$item->slug) }}"><img style="height: 150px" src="{{ $item->image }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Travel</a>
                                </div>
                                <h3 class="post-title" style="clear: none"><a href="{{ route('user.blog.show',$item->slug) }}">{{ $item->title }}</a></h3>
                                <ul class="post-meta">
                                    <li><a href="">{{ $item->user->name }}</a></li>
                                    <li>
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                @endforeach
                <!-- post -->
                
                <!-- /post -->

                {{--  <div class="row">
                    <!-- post -->
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Lifestyle</a>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                                <ul class="post-meta">
                                    <li><a href="author.html">John Doe</a></li>
                                    <li>20 April 2018</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Lifestyle</a>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                                <ul class="post-meta">
                                    <li><a href="author.html">John Doe</a></li>
                                    <li>20 April 2018</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <div class="clearfix visible-md visible-lg"></div>

                    <!-- post -->
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="blog-post.html"><img src="./img/post-9.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Lifestyle</a>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                                <ul class="post-meta">
                                    <li><a href="author.html">John Doe</a></li>
                                    <li>20 April 2018</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->

                    <!-- post -->
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="blog-post.html"><img src="./img/post-7.jpg" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Health</a>
                                    <a href="category.html">Lifestyle</a>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                                <ul class="post-meta">
                                    <li><a href="author.html">John Doe</a></li>
                                    <li>20 April 2018</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->
                </div>  --}}

                <!-- post -->
               
                <!-- /post -->

                <!-- post -->
                {{--  <div class="post post-row">
                    <a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="category.html">Fashion</a>
                            <a href="category.html">Lifestyle</a>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">John Doe</a></li>
                            <li>20 April 2018</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                    </div>
                </div>
                <!-- /post -->

                <!-- post -->
                <div class="post post-row">
                    <a class="post-img" href="blog-post.html"><img src="./img/post-8.jpg" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="category.html">Fashion</a>
                            <a href="category.html">Lifestyle</a>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">John Doe</a></li>
                            <li>20 April 2018</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                    </div>
                </div>
                <!-- /post -->

                <!-- post -->
                <div class="post post-row">
                    <a class="post-img" href="blog-post.html"><img src="./img/post-12.jpg" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="category.html">Lifestyle</a>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">John Doe</a></li>
                            <li>20 April 2018</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                    </div>
                </div>
                <!-- /post -->

                <!-- post -->
                <div class="post post-row">
                    <a class="post-img" href="blog-post.html"><img src="./img/post-7.jpg" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="category.html">Health</a>
                            <a href="category.html">Lifestyle</a>
                        </div>
                        <h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">John Doe</a></li>
                            <li>20 April 2018</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                    </div>
                </div>
                <!-- /post -->

                <div class="section-row loadmore text-center">
                    <a href="#" class="primary-button">Load More</a>
                </div>  --}}
            </div>

            <div class="col-md-4">
                <!-- ad widget-->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="./img/ad-3.jpg" alt="">
                    </a>
                </div>
                <!-- /ad widget -->

                <!-- social widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Social Media</h2>
                    </div>
                    <div class="social-widget">
                        <ul>
                            <li>
                                <a href="#" class="social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <span>21.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <span>10.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    <span>5K<br>Followers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /social widget -->

                <!-- category widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Categories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            @foreach ($count_category as $item)
                                <li><a href="{{ route('user.category',$item->slug) }}">{{ $item->name }}<span>{{ $item->count }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Popular Posts</h2>
                    </div>
                    <!-- post -->
                    @foreach ($popular_blog as $item )
                        <div class="post post-widget">
                            <a class="post-img" href="{{route('user.blog.show',$item->slug)}}"><img src="{{ $item->image }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="{{ route('user.category',$item->category->slug) }}">{{ $item->category->name }}</a>
                                </div>
                                <h3 class="post-title" style="clear: none"><a href="{{route('user.blog.show',$item->slug)}}">{{ $item->title }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                    <!-- /post -->
                </div>
                <!-- /post widget -->

                <!-- galery widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Instagram</h2>
                    </div>
                    <div class="galery-widget">
                        <ul>
                            <li><a href="#"><img src="./img/galery-1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-2.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/galery-6.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /galery widget -->

                <!-- Ad widget -->
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="./img/ad-1.jpg" alt="">
                    </a>
                </div>
                <!-- /Ad widget -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@endsection 
