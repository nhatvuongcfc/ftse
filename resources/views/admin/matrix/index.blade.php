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
                    <div class="col-sm-4">
                        <button class="btn btn-success" onclick="test()">TEST</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  ...
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        <h2>Ma trận <b>Đề thi</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ route('admin.matrix.create') }}" class="btn  btn-success add-new"><i class="fa fa-plus"></i> Add New</a>
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
                        <th>Tên <i class="fa fa-sort"></i></th>
                        <th>Số câu hỏi</th>
                        <th>Môn học<i class="fa fa-sort"></i></th>
                        <th>Khối</th>
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
                    @foreach ($matrices as $key=> $matrix)
                        <tr>
                            
                            <td>{{ $key+1 }}</td>
                            <td><a href="{{ route('admin.matrix.show', $matrix->id) }}" >{{ $matrix->name }}</a></td>
                            <td>{{ $matrix->number_question }}</td>
                            <td>{{ $matrix->subject->name }}</td>
                            <td>{{ $matrix->group->name }}</td>
                            <td>
                                <a href="{{ route('admin.matrix.show', $matrix->id) }}" class="view" title="Detail" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                <a href="{{ route('admin.matrix.edit', $matrix->id) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="#" class="delete" onclick="delete_one({{$matrix->id}})" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                            <td>
                                <div class="custom-control  custom-checkbox custom-control-inline">
                                   <input type="checkbox" name="options[]" class=" checkbox_some custom-control-input" id="{{$matrix->id}}">
                                   <label class="custom-control-label" for="{{$matrix->id}}"></label>
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