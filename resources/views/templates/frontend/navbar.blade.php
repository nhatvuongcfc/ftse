<header id="header">

<nav class="navbar navbar-expand-lg navbar-dark  mainmenu ftco_navbar  ftco-navbar-light
fixed-top scrolling-navbar" style="z-index: 1000">
   <div class="container" style="max-width:1260px;">
       <img src="{{ asset('/image/user/logo-text.png') }}" alt="" width="220px" >

       <button class=" open-menu navbar-toggler">
        <img class="icon-menu" src="{{ asset('/image/user/menu.svg') }}"></img>

        <span class="oi oi-menu"></span> 
      </button>

       <div class="collapse navbar-collapse" id="ftco-nav">
    {{--  @php
    Navbar($navbars); 
    @endphp    --}}
            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a href="" class="nav-link">TRANG CHỦ</a></li>
                <li class="nav-item"><a href="" class="nav-link">VỀ FASTTRACK</a></li>
                <li class="nav-item"><a href="/blog" class="nav-link">BLOG</a></li>
                <li class="dropdown nav-item">
                <a class="dropdown-toggle nav-link" href="#" >KHÓA HỌC</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="sub-menu"><a href="#">LỊCH KHAI GIẢNG</a></li>
                    <li class="sub-menu"><a href="#">LẬP TRÌNH VIÊN CHUYÊN NGHIỆP</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KHÓA HỌC NGẮN HẠN</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="sub-menu"><a href="#">LẬP TRÌNH FRONT END</a></li>
                            <li class="sub-menu"><a href="#">LẬP TRÌNH PHP</a></li>
                            <li class="sub-menu"><a href="#">LẬP TRÌNH JAVA</a></li>
                            <li class="sub-menu"><a href="#">LẬP TRÌNH .NET</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
               {{--  <li class="nav-item"><a href="{{ route('dang-nhap') }}" class="nav-link">ĐĂNG NHẬP</a></li>   --}}
             
             @guest
            <li class="nav-item btn-login">
               
                <li class="nav-item"><a href="/dang-nhap" class="nav-link">ĐĂNG NHẬP</a></li> 
            </li>
            @else
            <li class="nav-item dropdown nav-user ">
                <li class="nav-item avatar dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle z-depth-0 w-40 h-40"
                        alt="avatar image">
                        {{ Auth::user()->name }}
                        <input type="hidden" class="user_id" value="{{ Auth::id() }}">

                    </a>
                    <div class="dropdown-menu parent-menu" aria-labelledby="dropdownMenuLink1">
                        <a class="dropdown-item" href="#">Trang cá nhân</a>
                        {{--  <a class="dropdown-item" href="{{ route('test') }}">Bài kiểm tra</a>  --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Đăng xuất
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </li>
                
            </div>

            </div>
            </li>
            @endguest
        </ul>
       </div>
   </div>
</nav>

<nav class="sidebar">
<div  id="content-sidebar">
    <img class="close-sidebar" src="{{ asset('/image/user/cancel.svg') }}"></img>  
        
        <ul class="nano-content navbar-nav">
          <li class="nav-item">
            <a href="index.html"><span>TRANG CHỦ</span></a>
          </li>
          <li  class="nav-item">
            <a href="index.html"><span>VỀ FASTTRACK</span></a>
          </li>
          <li class="nav-item">
            <a href="index.html"><span>BLOG</span></a>
          </li>
          <li class="sub-menu dropdown ">
            <a class="dropdown-toggle"><span>KHÓA HỌC</span></a>
            <ul class="dropdown-content">
              <li><a href="ui-alerts-notifications.html">LỊCH KHAI GIẢNG</a>
              </li>
              <li><a href="ui-panels.html">LẬP TRÌNH VIÊN CHUYÊN NGHIỆP</a>
              </li>
              <li class="sub-menu dropdown">
                <a class="dropdown-toggle">KHÓA HỌC NGẮN HẠN</a>
                <ul class="dropdown-content">
                  <li><a href="ui-alerts-notifications.html"></a>
                  </li>
                  <li><a href="ui-panels.html">LẬP TRÌNH VIÊN CHUYÊN NGHIỆP</a>
                  </li>
                  <li><a href="ui-buttons.html">KHÓA HỌC NGẮN HẠN</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="index.html"><span>LIÊN HỆ</span></a>
          </li><li>
            <a href="index.html"><span>ĐĂNG NHẬP</span></a>
          </li>
          
        </ul> 
</div>
    
</nav>
</header>

  @yield('content')
{{--  @php

function Sidebar($navbars, $parent_id = 0, $classUl='nano-content navbar-nav')
{
    $navbar_child=array();
    $subMenu='';
    $classLi='';
    $classA='';
    foreach ($navbars as $key => $item)
    {
        if ($item['parent_id'] == $parent_id)
        {
            if($item['slug']=='#'){
                $subMenu=$item['id'];
            
            }
            $navbar_child[] = $item;
            unset($navbars[$key]);
        }
    }
    if ($navbar_child)
    {
            echo '<ul class="'.$classUl.'">';
            foreach ($navbar_child as $key => $item)
            {
                
                if($parent_id==0){
                    if($item['id']==$subMenu){
                        $classLi='sub-menu dropdown';
                        $classA='dropdown-toggle';
                    }
                    else{
                        $classLi='nav-item';
                        $classA='';
                    }
                }
                else{
                    if($item['id']==$subMenu){
                        $classLi='dropdown';
                        $classA='dropdown-toggle';
                    }
                    else{
                        $classLi='sub-menu';
                        $classA='';
                    }
                }
                echo '<li class="'.$classLi.'">';
                echo '<a href="/'.$item['slug'].'" class="'.$classA.'">'.$item['title'];
                    Sidebar($navbars, $item['id'], $classUl='dropdown-content');        
                echo '</a></li>';
            }
            echo '</ul>'; 
    }
}
function Navbar($navbars, $parent_id = 0, $classUl='navbar-nav ml-auto')
{
    $navbar_child=array();
    $subMenu='';
    $classLi='';
    $classA='';
    foreach ($navbars as $key => $item)
    {
        if ($item['parent_id'] == $parent_id)
        {
            if($item['slug']=='#'){
                $subMenu=$item['id'];
            
            }
            $navbar_child[] = $item;
            unset($navbars[$key]);
        }
    }
    if ($navbar_child)
    {
            echo '<ul class="'.$classUl.'">';
            foreach ($navbar_child as $key => $item)
            {
                
                if($parent_id==0){
                    if($item['id']==$subMenu){
                        $classLi='dropdown nav-item';
                        $classA='dropdown-toggle nav-link';
                    }
                    else{
                        $classLi='nav-item';
                        $classA='nav-link';
                    }
                }
                else{
                    if($item['id']==$subMenu){
                        $classLi='dropdown';
                        $classA='dropdown-toggle';
                    }
                    else{
                        $classLi='sub-menu';
                        $classA='';
                    }
                }
                echo '<li class="'.$classLi.'">';
                echo '<a href="/'.$item['slug'].'" class="'.$classA.'">'.$item['title'];
                    Navbar($navbars, $item['id'], $classUl='dropdown-menu');        
                echo '</a></li>';
            }
            echo '</ul>'; 
    }
}
@endphp  --}}
