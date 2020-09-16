@section('css')
<link rel="stylesheet" href="{{ asset('css/user/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/login.css') }}">    
@endsection
<body id="page-top">
    <div style="position: relative">

    
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="brand">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img src="{{ asset('/image/user/logo-text.png') }}" alt="" width="220px" >
        </a>
    </div>
    <div class="btn-mobile">
        
        @guest
        @else
        <div class=" nav-user-mobile nav-user dropdown navbar-toggler navbar-toggler-right ">
            <div class="user-avatar">
                <img class="img-avatar" src="https://i2-prod.mirror.co.uk/incoming/article21408841.ece/ALTERNATES/s615/0_Leicester-City-v-Chelsea-FC-Premier-League.jpg" alt="">
            </div>
            <div class="user-menu">
            <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                 <span class="menu-text">{{ Auth::user()->name }}</span>
                 
            </a>
            <div class="dropdown-menu parent-menu" aria-labelledby="dropdownMenuLink1">
                <a class="dropdown-item" href="#">Trang cá nhân</a>
                <h1>{{ Auth::user()->id }}</h1>

                <a class="dropdown-item" href="#">Trang cá nhân</a>
                <a class="dropdown-item" href="#">Trang cá nhân</a>
                <a class="dropdown-item" href="#">Trang cá nhân</a>
                <a class="dropdown-item" href="#">Trang cá nhân</a>
                <a class="dropdown-item" href="#">Trang cá nhân</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Đăng xuất
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
            </div>
            </div>
        </div>
        @endguest
        <button class="navbar-toggler navbar-toggler-right btn-menu" type="button">
            <i class="fas fa-bars fa-2x" style="color: white;"></i>
        </button>
    <a class="navbar-toggler navbar-toggler-right btn-search">
        <i class="fas fa-search fa-2x" style="color: white;"></i>
    </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#question1">
                    <span class="menu-text">
                            TRANG CHỦ
                        </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#question2">
                    <span class="menu-text">
                            về fasttrack
                        </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="menu-text">
                            Khóa học
                        </span>
                </a>

                <div class="dropdown-menu parent-menu" aria-labelledby="dropdownMenuLink1">
                    <a class="dropdown-item" href="#">Lịch khải giảng</a>
                    <a class="dropdown-item" href="#">Lập trình viên chuyên nghiệp</a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: ; margin-left: 6%; color: black;">
                                Khóa học ngắn hạn
                            </a>
                        <div class="dropdown-menu menu2 child-menu" aria-labelledby="dropdownMenuLink2">
                            <a class="dropdown-item" href="#">Lập trình Front End</a>
                            <a class="dropdown-item" href="#">Lập trình Php</a>
                            <a class="dropdown-item" href="#">Lập trình Java</a>
                            <a class="dropdown-item" href="#">Lập trình .Net</a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#download">
                    <span class="menu-text">
                            blog
                        </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#download">
                    <span class="menu-text">
                            liên hệ
                        </span>
                </a>
            </li>
            @guest
            <li class="nav-item btn-login">
                <a href="{{ route('login') }}" class="nav-link js-scroll-trigger">
                    <span class="menu-text">
                            ĐĂNG NHẬP
                        </span>
                </a>
            </li>
            @else
            <li class="nav-item dropdown nav-user ">
                <div class="user-avatar">
                    <img class="img-avatar" src="https://i2-prod.mirror.co.uk/incoming/article21408841.ece/ALTERNATES/s615/0_Leicester-City-v-Chelsea-FC-Premier-League.jpg" alt="">
                </div>
                <div class="user-menu">
                <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     <span class="menu-text">{{ Auth::user()->name }}</span>
                     <input type="hidden" class="user_id" value="{{ Auth::id() }}">
                </a>
                <div class="dropdown-menu parent-menu" aria-labelledby="dropdownMenuLink1">
                    <a class="dropdown-item" href="#">Trang cá nhân</a>
                    {{--  <a class="dropdown-item" href="{{ route('test') }}">Bài kiểm tra</a>  --}}
                    <a class="dropdown-item" href="#">Trang cá nhân</a>
                    <a class="dropdown-item" href="#">Trang cá nhân</a>
                    <a class="dropdown-item" href="#">Trang cá nhân</a>
                    <a class="dropdown-item" href="#">Trang cá nhân</a>
                    <a class="dropdown-item" href="#">Trang cá nhân</a>
                    <a class="dropdown-item" href="#">Trang cá nhân</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     docume
                                                     nt.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
                </div>
            </li>
            @endguest
            <li class="nav-item btn-search">
                <a class="nav-link js-scroll-trigger">
                    <i class="fas fa-search fa-2x" style="color: white;"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<div style="position: absolute;
 top: -10000px;
 width: 0px;
 height: 0px;"></div>
</div>

<div class="search">
    <input class="form-control input-search" autofocus type="text" placeholder="Search" aria-label="Search" />
</div>

<div class="menu-mobile d-md-flex d-xl-none d-flex d-lg-flex">
    <a  class="btn-close btn-close-menu" ><span>&#10006</span></a>
    
    <ul class=" scrollbar navbar-nav ">
       
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#download">
                <span class="menu-text">
                        Trang chủ
                    </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#download">
                <span class="menu-text">
                        Về fasttrack
                    </span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="menu-text">
                        Khóa học
                    </span>
            </a>

            <div class="dropdown-menu parent-menu "  aria-labelledby="dropdownMenuLink1">
                <a class="dropdown-item" href="#">Lịch khải giảng</a>
                <a class="dropdown-item" href="#">Lập trình viên chuyên nghiệp</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 100; margin-left: 9%;">
                            Khóa học ngắn hạn
                        </a>
                    <div class="dropdown-menu menu2 child-menu"  aria-labelledby="dropdownMenuLink2">
                        <a class="dropdown-item" href="#">Lập trình Front End</a>
                        <a class="dropdown-item" href="#">Lập trình Php</a>
                        <a class="dropdown-item" href="#">Lập trình Java</a>
                        <a class="dropdown-item" href="#">Lập trình .Net</a>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#download">
                <span class="menu-text">
                        Blog
                    </span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#download">
                <span class="menu-text">
                        Liên hệ
                    </span>
            </a>
        </li>
        
        @guest
                
            
        <li class="nav-item btn-login">
            <a href="{{ route('login') }}" class="nav-link js-scroll-trigger">
                <span class="menu-text">
                        ĐĂNG NHẬP
                    </span>
            </a>
        </li>
        @endguest
    </ul>
</div>
 
<div class="content" >

    @yield('content')
</div>
