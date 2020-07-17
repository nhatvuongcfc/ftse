 @extends('templates.admin.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
@endsection
@section('js')
    <script src="{{ asset('js/admin/test.js') }}"></script>
@endsection
@section('content')
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Quản lý đề thi</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ route('admin.test.matrix') }}"class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                        <button class="btn btn-danger" data-toggle="modal" onclick="delete_mul()"><i class="fa fa-trash"></i> <span>Delete </span></button>
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Export</button>
                    </div>
                   
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên đề thi</th>
                        <th>Tên ma trận</th>
                        <th>Môn học</th>
                        <th>Khối</th>
                        <th>Số câu hỏi</th>
                        <th>Ngày thi</th>
                        <th>Thời gian làm bài</th>
                        <th>Hình thức</th>
                        <th>Trạng thái</th>
                        <th>Actions</th>
                        <th>
                            <div class="custom-control  custom-checkbox custom-control-inline">
                               <input type="checkbox" class=" checkbox custom-control-input" id="selectAll">
                               <label class="custom-control-label" for="selectAll"></label>
                             </div>
                         </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tests as $key=> $test)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td><a href="{{ route('admin.test.show', $test->id) }}" >{{ $test->name }}</a></td>
                            <td>{{ $test->matrix->name }}</td>  
                             <td> {{ $test->matrix->subject->name }}</td>
                            <td> {{ $test->matrix->group->name }}</td>
                            <td>{{ $test->matrix->number_question}}</td>
                             
                             <td>{{ $test->time }}</td>
                             <td>{{ $test->timer }}</td>
                             <td>{{ $test->status }}</td>
                             <td>{{ $test->isOnline }}</td>
                            <td>
                                <a href="{{ route('admin.test.show', $test->id) }}" class="view" title="Detail" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{{ route('admin.test.edit', $test->id) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="#" class="delete" onclick="delete_one({{$test->id}})" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                            <td>
                                <div class="custom-control  custom-checkbox custom-control-inline">
                                   <input type="checkbox" name="options[]" class=" checkbox_some custom-control-input" id="{{$test->id}}">
                                   <label class="custom-control-label" for="{{$test->id}}"></label>
                                 </div>
                             </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection  
 {{--  @foreach ($tests as $key=> $test)
{{ $test->matrix->name }}
@endforeach     --}}