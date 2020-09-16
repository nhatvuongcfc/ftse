@extends('templates.backend.footer')
@extends('templates.backend.navbar')
@extends('templates.backend.header')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
@endsection
@section('js')
    <script src="{{ asset('js/admin/matrix.js') }}"></script>
@endsection
@section('content')
<div class="container-xl content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent">
                            Kiểm tra Toeic
                        </i>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="background-color: #F1F2F7">
                        <li class="breadcrumb-item">
                            <a href="" style="color:#3c8dbc">
                                <i class="fa fa-home fa-1x"></i>
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            Kiểm tra toàn bộ Toeic
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content" style="padding: 0 1.875em;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="background-color:#FFF">
                            <div class="card-tools">
                                <div class="float-right ">
                                    <div class="menu-right">
                                        <a href="{{ route('admin.fulltest.create') }}" class="btn btn-success btn-flat" title="Thêm đề thi">
                                            <i class="fa fa-plus"></i>
                                            Thêm
                                        </a>
                                    </div>
                                    <div class="menu-right">
                                        <button class="btn btn-flat btn-danger grid-trash" title="Delete">
                                            <i class="fa fa-trash-o"></i>
                                            Xóa
                                        </button>
                                    </div>
                                    <div class="menu-right">
                                        <button onclick="document.location.reload()" class="btn btn-flat btn-primary grid-refresh" title="Refresh">
                                            <i class="fa fa-refresh"></i>
                                            Tải lại
                                        </button>
                                    </div>
                                </div>
                                
                            <div class="float-left row">
                                
                                <div class="menu-left ">
                                    <div class="input-group float-right ml-1">
                                        <div class="form-group mb-2">
                                            <select class=" custom-select">
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                          </div>
                                        <div class="form-group mb-2">
                                            <select class=" custom-select">
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                          </div>
                                          <div class="form-group p-l-6">
                                            <button class="btn btn-flat btn-warning grid-trash text-white"  title="Sort">
                                                <i class="fa fa-sort" style="color: #fff"></i>
                                                Sắp xếp
                                            </button>
                                          </div>
                                    </div>
                                    
                                </div>
                                <div class="menu-left">
                                    <div class="md-form mt-0">
                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                      </div>
                                </div>
                            
                            </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên</th>
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
                                    @foreach ($fullTests as $key=> $fullTest)
                                        <tr>
                                            
                                            <td>{{ $key+1 }}</td>
                                            <td><a>{{ $fullTest->name }}</a></td>
                                            <td>
                                                @if ($fullTest->status==0)
                                                    <button class="btn btn-danger">Không hiển thị</button>
                                                @else
                                                    <button class="btn btn-success">Hiển thị</button>
                                                @endif
                                            </td>
                                            <td>
                                                <a  class="view" title="Detail" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                                <a  class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                                <a href="#" class="delete" onclick="delete_one({{$fullTest->id}})" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                            </td>
                                            <td>
                                                <div class="custom-control  custom-checkbox custom-control-inline">
                                                   <input type="checkbox" name="options[]" class=" checkbox_some custom-control-input" id="{{$fullTest->id}}">
                                                   <label class="custom-control-label" for="{{$fullTest->id}}"></label>
                                                 </div>
                                             </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </section>
    
</div>
@endsection