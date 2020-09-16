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
@endsection
@section('content')

<div class="section" style="padding-top:120px ">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div id="hot-post" class="row hot-post">
            
            <div class="col-md-8 hot-post-left">
                <!-- post -->
                <div class="post post-thumb" style="height: 507px">
                    <a class="post-img" href="{{ route('user.blog.show',$hot_blog[0]->slug) }}">
                        {{--  <img src="{{ $hot_blog[0]->image }}" alt="">    --}}
                        <div class="thumb" style="background-image: url('{{ $hot_blog[0]->image }}')">
                        </div>
                    </a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="{{ route('user.category',$hot_blog[0]->category->slug) }}">{{ $hot_blog[0]->category->name }}</a>
                        </div>
                        <h3 class="post-title title-lg"><a href="{{ route('user.blog.show',$hot_blog[0]->slug) }}">{{ $hot_blog[0]->title }}</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">{{ $hot_blog[0]->user->name }}</a></li>
                            <li> 
                                {{ \Carbon\Carbon::parse($hot_blog[0]->created_at)->format('d-m-Y')}}
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /post -->
            </div>
            @php
                unset($hot_blog[0]);
            @endphp
            <div class="col-md-4 hot-post-right">
            @foreach ($hot_blog as $key=> $item)
                        <div class="post post-thumb"style="height:250px">
                            <a class="post-img" href="{{route('user.blog.show',$item->slug)}}">
                                <div class="thumb" style="background-image: url('{{ $item->image }}')">

                                </div>
                                {{--  <img src="{{ $item->image }}" alt="">  --}}
                            </a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="{{ route('user.category',$item->category->slug) }}">{{ $item->category->name }}</a>
                                </div>
                                <h3 class="post-title title-lg"><a style="font-size: 1.3rem" href="{{route('user.blog.show',$item->slug)}}">{{ $item->title }}</a></h3>
                                <ul class="post-meta">
                                    <li><a href="author.html">{{ $item->user->name }}</a></li>
                                    <li> 
                                        {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}
                                    </li>
                                </ul>
                            </div>
                        </div>
            @endforeach
            </div>
                    
           
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Recent posts</h2>
                        </div>
                    </div>
                    <!-- post -->
                    @foreach ($recent_blog as $item)
                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="{{route('user.blog.show',$item->slug)}}"><img style="max-height:180px" src="{{ $item->image }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="{{ route('user.category',$item->category->slug) }}">{{ $item->category->name }}</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{route('user.blog.show',$item->slug)}}">{{ $item->title }}</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">{{ $item->user->name }}</a></li>
                                        <li>
                                            {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>    
                    @endforeach
                    
                   
                </div>
                <!-- /row -->

                <!-- row -->
                @foreach ($categories as $category)
                    @php
                        $k=1;
                    @endphp
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">{{ $category->name }}</h2>
                            </div>
                        </div>
                        @foreach ($blogs as $blog)
                                @if($category->id==$blog->category_id && $k<4)
                                    <div class="col-md-4">
                                        <div class="post post-sm">
                                            {{--  <div class="thumb" style="background-image: url">  --}}

                                            {{--  </div>  --}}
                                            <a class="post-img" href="{{route('user.blog.show',$blog->slug)}}">
                                                <img style="max-height:125px;background-position: 0% 0%;background-size: cover;" src="{{ $blog->image }}" alt="">
                                                {{--  <div class="thumb" style="background-image: url({{ $blog->image }})">

                                                </div>  --}}
                                            </a>
                                            <div class="post-body">
                                                <div class="post-category">
                                                    <a href="{{ route('user.category',$category->slug) }}">{{ $category->name }}</a>
                                                </div>
                                                <h3 class="post-title title-sm"><a href="{{route('user.blog.show',$blog->slug)}}">{{ $blog->title }}</a></h3>
                                                <ul class="post-meta">
                                                    <li><a href="author.html">{{ $blog->user->name }}</a></li>
                                                    <li>                                            
                                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d-m-Y')}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $k++;
                                    @endphp
                                @endif
                        @endforeach
                    </div>
                @endforeach 
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
                <!-- /category widget -->

                <!-- newsletter widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Newsletter</h2>
                    </div>
                    <div class="newsletter-widget">
                        <form>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                            <input class="input" name="newsletter" placeholder="Enter Your Email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                    </div>
                </div>
                <!-- /newsletter widget -->

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
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<!-- /SECTION -->

@endsection 
