@extends('templates.backend.footer')
@extends('templates.backend.navbar-student')
@extends('templates.backend.header')
@section('title')
<title>Full Test</title>
@endsection
@section('content')
<div class="container-xl content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" style="color: #007BFF">
                            Full Test
                        </i>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="background-color: #F1F2F7">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/student') }}" style="color:#3c8dbc">
                                <i class="fa fa-home fa-1x"></i>
                                Trang chủ
                            </a>
                        </li>
                        <li class="breadcrumb-item active" style="color: red">
                            Full Test
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content" style="padding: 0 1.875em;">
        <div class="container-fluid">
            <div class="row">
                @foreach ($fullTests as $item)
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="view overlay">
                            <a href="{{ route('student.fulltest.show', $item->slug) }}">
                            <img class="card-img-top" src="{{ asset('image/user/logo-toeic.jpg') }}"
                                alt="Card image cap">
                            </a>
                            
                        </div>
                        <!-- Card content -->
                        <div class="card-body">
                          <!-- Title -->
                           <a style="color: #333" href="{{ route('student.fulltest.show', $item->slug) }}"> <h4 class="card-title">{{ $item->name }}</h4></a>
                        </div>
                    </div>
                </div>
                
                @endforeach
                     
            </div>
        </div>
    </section>
</div>

@endsection