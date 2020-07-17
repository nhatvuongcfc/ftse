@extends('templates.admin.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
@endsection
@section('js')
    <script src="{{ asset('js/admin/matrix.js') }}"></script>
@endsection
@section('content')

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col">
                            <div class="form-group">

                              <label for="name">Tên ma trận</label>
                              <input type="text"  required class="form-control" id="name_matrix" placeholder="Tên ma trận">
                            </div>
                          
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Khối lớp</label>
                                <select id="create_group" class="browser-default custom-select">
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->id }}">{{ $group->name }}</option>    
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Môn học</label>
                                <select id="create_subject" class="browser-default custom-select">
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>    
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="number_question">Số lượng câu hỏi</label>
                                <div class=" def-number-input number-input safari_only">
                                    <button onclick="minus_number_question()" class="minus"></button>
                                    <input  onfocus="focus_input(this)" class="number_question"  min="0" value="0" type="number">
                                    <button onclick="plus_number_question()" class="plus"></button>
                                </div>
                            </div>
                            <button  style="float: left" onclick="getTopic()" class="btn btn-success">Lọc chuyên đề</button>

                            
                    </div>
                    <div class="col">
                        
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Chuyên đề</label>
                            <div class="topic">
                            </div>
                            <input type="hidden" name="" id="row" value="">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <table id="table-matrix" class="table  table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Chuyên đề</th>
                                <th>Nhận biết</th>
                                <th>Thông hiểu</th>
                                <th>Vận dụng</th>
                                <th>Vận dụng cao</th>
                                <th>Số câu</th>
                                <th>%</th>
                            </tr>
                        </thead>
                        <tbody class="box_matrix">
                            
                        </tbody>
                        
                    </table>
                </div>
                <button  style="float: right" onclick="submit()" class="btn btn-success">SAVE</button>
                
            
        </div>
    </div>
</div>
@endsection