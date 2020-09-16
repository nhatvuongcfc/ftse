@extends('templates.backend.footer')
@extends('templates.backend.navbar')
@extends('templates.backend.header')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
@endsection

@section('content')
<div class="container-xl content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus">
                            Tạo đề thi
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
                            Tạo đề thi
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
                                        <button class="btn btn-flat btn-primary grid-trash" title="Delete">
                                            <i class="fa fa-undo"></i>
                                            Quay lại
                                        </button>
                                    </div>
                                    
                                    
                                </div>
                                
                            <div class="float-left row">
                                
                                <div class="menu-left ">
                                    Thêm đề thi mới
                                </div>
                            </div>
                            </div>
                        </div>
                    <form action="{{ url('admin/blog') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="" class="f-w-700 col-sm-2 col-form-label">
                                    Thể loại
                                </label>
                                <div class="col-sm-8">
                                    <select class="browser-default custom-select" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="f-w-700 col-sm-2 col-form-label">
                                    Tên
                                </label>
                                <div class="col-sm-8">
                                    <div class="md-form m-b-15">
                                        <input type="text" id="title" onkeyup="ChangeToSlug()" class="form-control" name="title" value="">
                                        <input type="hidden" name="slug" class="form-control" value="" id="slug">
                                      </div>
                                    @if ($errors->has('title'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                    {{-- <input type="text"> --}}
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <label for="" class="f-w-700 col-sm-2 col-form-label">
                                    Ảnh đại diện
                                </label>
                                <div class="col-sm-8 ">
                                    <div class="m-b-15">
                                        <div class="input-group">
                                            <input id="thumbnail" class="form-control" type="text" name="cover">
                                            <span class="input-group-btn">
                                              <a id="lfm" style="color: #fff" data-input="thumbnail" data-preview="preview_image" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Choose
                                              </a>
                                            </span>
                                        </div>
                                        <div id="preview_image" style="margin-top:15px;max-width:150px">
                                        </div> 
                                        @if ($errors->has('image'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('image') }}
                                            </div>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>     
                             <div class="form-group row">
                                <label for="" class="f-w-700 col-sm-2 col-form-label">
                                    Nội dung
                                </label>
                                <div class="col-sm-8 ">
                                    <div class="m-b-15">
                                        <textarea id="content" name="content" cols="80" rows="10">
                                        </textarea>
                                    </div>
                                    @if ($errors->has('content'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('content') }}
                                        </div>
                                    @endif
                                    
                                </div>
                            </div>     
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <button type="button" class="btn btn-success" onclick="add_more_images()"><i class="fa fa-plus"></i>Thêm hình ảnh</button>
                                </div>
                            </div>

                            <input type="button" class="btn btn-danger" id="removeFormImage" value="Xóa"></input>
 
                            
                        
                            <button type="submit" class="btn btn-success ">ok</button>

                        </div>
                    </form>
                    
                        {{-- <div class="card-footer row m-l-0" style="background-color:#fff; padding:1.25rem">
                            <button type="submit" class="btn btn-success">ok</button>
                            <button class="btn btn-flat btn-primary grid-trash" title="Delete">
                                <i class="fa fa-undo"></i>
                                Quay lại
                            </button>
                        </div> --}}
                             
                    </div>
                </div>
            </div>

        </div>
        
    </section>
    
</div>
@endsection
@section('js')
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

    <script>
        {{-- $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
          }); --}}
           
        CKEDITOR.replace( 'content', {
            skins: 'office2013',
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        });
        $('#lfm').filemanager('image');
    </script>
@endsection