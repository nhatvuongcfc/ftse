@extends('templates.admin.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
@endsection
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{ asset('js/admin/test.js') }}"></script> 

@endsection
@section('content')
<div class="container-xl">
    <h2>Hệ thống tự động tạo đề thi</h2>
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="row">
                <h3>Ma trận</h3>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên <i class="fa fa-sort"></i></th>
                            <th>Số câu hỏi</th>
                            <th>Môn học<i class="fa fa-sort"></i></th>
                            <th>Khối</th>
                            <th></th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matrices as $key=> $matrix)
                            <tr>
                                
                                <td>{{ $key+1 }}</td>
                                <td><a href="{{ route('admin.matrix.show', $matrix->id) }}" >{{ $matrix->name }}</a></td>
                                <td>{{ $matrix->number_question }}</td>
                                <td>{{ $matrix->subject->name }}</td>
                                <td>{{ $matrix->group->name }}</td>
                                <td>
                                    <div class="custom-control custom-radio" >
                                        <input type="radio" onclick="chooseMatrix({{ $matrix->id }})" class="custom-control-input matrix_id" value="{{ $matrix->id }}" id="{{ $matrix->id }}" name="groupOfDefaultRadios">
                                        <label class="custom-control-label" for="{{ $matrix->id }}"></label>
                                      </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          
            <a href="" id="hrefSave" class="btn btn-success">SAVE</a>
        </div>
    </div>
</div>
@endsection