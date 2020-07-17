@extends('templates.admin.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
@endsection
@section('js')
{{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  --}}
    
<script src="{{ asset('js/admin/test.js') }}"></script> 
@endsection
@section('content')
<div class="container-xl">
    <h2>Hệ thống tự động tạo đề thi</h2>
        <div class="table-wrapper">
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="">Tên đề thi</label>
                            <input type="text" class="form-control" name="" id="name_test" placeholder="Tên đề thi">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Thời gian thi</label>
                        <div class="input-group" id="datetimepicker">
                            <input type="text" class="time form-control">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group exam">
                        <label for="">Kỳ thi</label>
                            <select  class="browser-default custom-select" style="font-size: 1.5rem">
                            @foreach ($exams as $exam)
                                <option  value="{{ $exam->id }}">{{ $exam->name }}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Thời gian làm bài (phút)</label>
                        <div class=" def-number-input number-input safari_only test" style="height:34px">
                            <button onclick="minus_number_question()" class="minus"></button>
                            <input  onfocus="focus_input(this)" class="number_question" id="timer"  min="0" value="0" type="number">
                            <button onclick="plus_number_question()" class="plus"></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Hình thức kiểm tra</label>
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input isOnline" id="isOnline_1" value="0" >
                                <label class="custom-control-label" for="isOnline_1">Kiểm tra trên giấy</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input isOnline" id="isOnline_0" value="1" >
                                <label class="custom-control-label" for="isOnline_0">Kiếm tra online</label>
                              </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="slidecontainer ">
                            <label for="">Số lượng đề hoán vị: <span id="value_permutation">1</span></label>
                            <div class="input-group">
                                <input type="range" value="0" min="1" max="10" onchange="change_permutation(this.value)" oninput="change_permutation(this.value)" class="slider" id="number_permutation">
                            </div>
                        </div>
                           
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" onclick="hide_collaspe()" class="custom-control-input name_code_auto" id="code_auto" value="1" >
                                <label class="custom-control-label" for="code_auto">Tự động tạo tên mã đề</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" data-target="#collapse_name_code" data-toggle="collapse" class="custom-control-input name_code_auto" id="code_user" value="0"   aria-expanded="false" aria-controls="collapseExample">
                                <label class="custom-control-label" for="code_user">Người dùng tạo tên mã đề</label>
                            </div>
                        </div>
                        <div class="collapse collapse-code" id="collapse_name_code">
                            <div class="card card-body card-code" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button onclick="store()" class="btn btn-success">SAVE</button>
        </div>
</div>

@endsection