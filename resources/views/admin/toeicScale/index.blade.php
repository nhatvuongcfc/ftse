@extends('templates.backend.footer')
@extends('templates.backend.navbar')
@extends('templates.backend.header')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
@endsection
@section('js')
<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
</script>
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
                            Thang điểm Toeic
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
                                        <a href="{{ route('admin.fulltest.create') }}" data-toggle="modal" data-target="#exampleModal" class="btn btn-success btn-flat" title="Thêm đề thi">
                                            <i class="fa fa-upload"></i>
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
                                        <th>Số câu đúng <i class="fa fa-sort"></i></th>
                                        <th>Điểm nghe</th>
                                        <th>Điểm đọc<i class="fa fa-sort"></i></th>
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
                                    @foreach ($scales as $key=> $value)
                                        <tr>
                                            
                                            <td>{{ $start+1 }}</td>
                                            <td>{{ $value->number_correct }}</td>
                                            <td>{{ $value->score_listening }}</td>
                                            <td>{{ $value->score_reading }}</td>
                                            <td>
                                                {{-- <a href="{{ route('admin.matrix.show', $value->id) }}" class="view" title="Detail" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a> --}}
                                                {{-- <a href="{{ route('admin.value.edit', $value->id) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a> --}}
                                                <a href="#" class="delete" onclick="delete_one({{$value->id}})" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                            </td>
                                            <td>
                                                <div class="custom-control  custom-checkbox custom-control-inline">
                                                   <input type="checkbox" name="options[]" class=" checkbox_some custom-control-input" id="{{$value->id}}">
                                                   <label class="custom-control-label" for="{{$value->id}}"></label>
                                                 </div>
                                             </td>
                                        </tr>
                                        
                                        @php
                                            $start++;
                                        @endphp
                                        
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $scales->links() }}

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nhập file excel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('admin/toeicscale/import') }}" method="post" enctype="multipart/form-data">
@csrf
      <div class="modal-body">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="file" id="customFile">
              <label class="custom-file-label" for="customFile">Nhập file excel</label>
            </div>
            <div class="custom-file m-t-15">
                {{-- @error('file')
                    <div class="alert alert-danger" role="alert">
                        <span>{{ $message }}</span>
                    </div>
                @enderror --}}
                @if ($errors->has('file'))
                    <div class="alert alert-danger" role="alert">
                        <span>{{ $errors->first('file') }}</span>
                    </div>
                @endif
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>

    </div>
  </div>
</div>
    </section>
    
</div>
@endsection