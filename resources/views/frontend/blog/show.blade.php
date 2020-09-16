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
<div id="post-header" class="page-header">
    <div class="page-header-bg" style="background-image: url({{ $blog->image }});" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="post-category">
                    <a href="category.html">{{ $blog->category->name }}</a>
                </div>
                <h1>{{ $blog->title }}</h1>
                <ul class="post-meta">
                    <li><a href="author.html">{{ $blog->user->name }}</a></li>
                    <li> 
                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d-m-Y')}}
                    </li>
                    <li><i class="fa fa-comments"></i> 3</li>
                    <li><i class="fa fa-eye"></i>{{ $blog->view }}</li>
                </ul>
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
                <!-- post share -->
                <div class="section-row">
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>

                    {{--  <div class="post-share">
                        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
                        <a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                        <a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
                        <a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
                    </div>  --}}
                </div>
                <!-- /post share -->

                <!-- post content -->
                <input type="hidden" name="" id="content" value="{{ $blog->content }}">
                <div class="section-row content-blog" >
                    
                </div>
                <!-- /post content -->

                <!-- post tags -->
                <div class="section-row">
                    <div class="post-tags">
                        <ul>
                            <li>TAGS:</li>
                            <li><a href="#">Social</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Health</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /post tags -->

                <!-- post nav -->
                {{--  <div class="section-row">
                    <div class="post-nav">
                        <div class="prev-post">
                            <a class="post-img" href="blog-post.html"><img src="./img/widget-8.jpg" alt=""></a>
                            <h3 class="post-title" style="clear: none"><a href="#">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                            <span>Previous post</span>
                        </div>

                        <div class="next-post">
                            <a class="post-img" href="blog-post.html"><img src="./img/widget-10.jpg" alt=""></a>
                            <h3 class="post-title"><a href="#">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                            <span>Next post</span>
                        </div>
                    </div>
                </div>  --}}
                <!-- /post nav  -->

                <!-- post author -->
                {{--  <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">About <a href="author.html">John Doe</a></h3>
                    </div>
                    <div class="author media">
                        <div class="media-left">
                            <a href="author.html">
                                <img class="author-img media-object" src="./img/avatar-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <ul class="author-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>  --}}
                <!-- /post author -->

                <!-- /related post -->
                <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                {{--  <div class="fb-comments" data-href="https://www.facebook.com/nhatvuong2206/" data-numposts="5" data-width=""></div>  --}}
                <div class="fb-comments" data-href="http://127.0.0.1:8000" data-numposts="5" data-width=""></div>

                <div>
                    <div class="section-title">
                        <h3 class="title">Related Posts</h3>
                    </div>
                    <div class="row">
                        @foreach ($related_blog as $item)
                            <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" style="height:120px; background-size:cover;background-position: 0% 0%;" href="blog-post.html"><img src="{{ $item->image }}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="{{route('user.blog.show',$item->slug)}}">{{ $item->category->name }}</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="blog-post.html">{{ $item->title }}</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="author.html">{{ $item->user->name }}</a></li>
                                            <li>
                                                {{ \Carbon\Carbon::parse($blog->created_at)->format('d-m-Y')}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /related post -->

                <!-- post comments -->
                {{--  <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">3 Comments</h3>
                    </div>
                    <div class="post-comments">
                        <!-- comment -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="./img/avatar-2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>John Doe</h4>
                                    <span class="time">5 min ago</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="reply">Reply</a>
                                <!-- comment -->
                                <div class="media media-author">
                                    <div class="media-left">
                                        <img class="media-object" src="./img/avatar-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <h4>John Doe</h4>
                                            <span class="time">5 min ago</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                                <!-- /comment -->
                            </div>
                        </div>
                        <!-- /comment -->

                        <!-- comment -->
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="./img/avatar-3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>John Doe</h4>
                                    <span class="time">5 min ago</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="reply">Reply</a>
                            </div>
                        </div>
                        <!-- /comment -->
                    </div>
                </div>  --}}
                <!-- /post comments -->
                <!-- post reply -->
                {{--  <div class="section-row">
                    <div class="section-title">
                        <h3 class="title">Leave a reply</h3>
                    </div>
                    <form class="post-reply">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="input" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="input" type="text" name="website" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="primary-button">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>  --}}
                <!-- /post reply -->
            </div>
            <div class="col-md-4">
                <!-- ad widget -->
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
                                <li><a href="#">{{ $item->name }}<span>{{ $item->count }}</span></a></li>
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
                            <input class="input" placeholder="Enter Your Email">
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
                    @foreach ($popular_blog as $item )
                        <div class="post post-widget">
                            <a class="post-img" style="max-height:90px; background-size:cover" href="{{ route('user.blog.show', $blog->slug) }}"><img src="{{ $item->image }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">{{ $item->category->name }}</a>
                                </div>
                                <h3 class="post-title" style="clear: none"><a href="{{ route('user.blog.show', $blog->slug) }}">{{ $item->title }}</a></h3>
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
<!-- /SECTION -->

@endsection 
@section('js')
<script>
    content();
    function content(){
        var content=$("#content").val();
        $(".content-blog").html(content);
    }
</script>
@endsection