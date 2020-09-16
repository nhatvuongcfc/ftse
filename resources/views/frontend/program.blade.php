@extends('templates.frontend.footer')
@extends('templates.frontend.navbar')

@extends('templates.frontend.header')
@section('css')
<link rel="stylesheet" href="{{ asset('css/user/blog.css') }}">
<link rel="stylesheet" href="{{ asset('css/user/program.css') }}">
<style>
    .navbar {
        background-image: url("https://fasttrack.edu.vn/wp-content/uploads/2019/11/header-bg.jpg");
    }
</style>
@endsection
@section('content')
<div class="section" style="padding-top:120px">
    <div class="program-slider">
        <div class="program-slider__wrp swiper-wrapper">
            <div class="program-slider__item swiper-slide">
                <div class="program-slider__img">
                    <img src="{{$program->image}}" alt="">
                </div>
                <div class="program-slider__content">
                    <div class="program-slider__title">{{ $program->name }}</div>
                    <div class="program-slider__text"></div>
                    <input id="content_program" type="hidden" name="" value="{{ $program->content }}">
                </div>
            </div>

        </div>
    </div>
</div>

@endsection 
@section('js')
<script>
    $(".program-slider__text").html($("#content_program").val());
</script>   
@endsection