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
                    <form action="{{ url('admin/fulltest') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="alert alert-danger" role="alert">
                                This is a danger alert—check it out!
                              </div>
                            <div class="form-group row">
                                <label for="" class="f-w-700 col-sm-2 col-form-label">
                                    Tên đề thi
                                </label>
                                <div class="col-sm-8">
                                    <div class="md-form m-b-15">
                                        <input type="text" id="form1" class="form-control" name="name" value="Practice Full Test Toeic Reading-Listening ">
                                      </div>
                                      <div class="alert alert-danger" role="alert">
                                        Chọn 
                                      </div>
                                    {{-- <input type="text"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="f-w-700 col-sm-2 col-form-label">
                                    File bài kiểm tra
                                </label>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" name="file_test" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Chọn file excel</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="f-w-700 col-sm-2 col-form-label">
                                    File đáp án
                                </label>
                                <div class="col-sm-8">
                                        <div class="custom-file">
                                          <input type="file" name="file_correct_answer" class="custom-file-input" id="customFile">
                                          <label class="custom-file-label" for="customFile">Chọn file đáp án</label>
                                        </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="f-w-700 col-sm-2 col-form-label">
                                    File nghe
                                </label>
                                <div class="col-sm-8">
                                    <form>
                                        <div class="custom-file">
                                          <input type="file" name="audio" class="custom-file-input" id="customFile">
                                          <label class="custom-file-label" for="customFile">Chọn file nghe</label>
                                        </div>
                                      </form>
                                </div>
                            </div>
{{--                             
                             <div class="form-group row">
                                <label for="" class="f-w-700 col-sm-2 col-form-label">
                                    Hình ảnh
                                </label>
                                <div class="col-sm-8 image-test">
                                    <div class="m-b-15">
                                        <div class="md-form m-b-15 form-group row">
                                            <label  class="col-sm-2 col-form-label">Câu:</label>
                                            <div class="col-sm-10">
                                                <input type="number"  name="index[]" class="form-control" id="index0" placeholder="Câu">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <input id="thumbnail" class="form-control" type="text" name="image[]">
                                            <span class="input-group-btn">
                                              <a id="lfm" style="color: #fff" data-input="thumbnail" data-preview="preview_image" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Choose
                                              </a>
                                            </span>
                                           
                                        </div>
                                        <div id="preview_image" style="margin-top:15px;max-width:150px">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>     --}}
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
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
          });
        var n=1;
        function add_more_images(){
            var content='';
            content+='<div class="m-b-15 content-image-sub-'+n+'">'
                        +'<div class="md-form m-b-15 form-group row">'
                            +'<label  class="col-sm-2 col-form-label">Câu:</label>'
                            +'<div class="col-sm-10">'
                                +'<input type="number" required name="index[]" class="form-control" id="index'+n+'" placeholder="Câu">'
                            +'</div>'
                        +'</div>'
                        +'<div class="input-group">'
                            +'<input id="thumbnail_sub_'+n+'" class="form-control" type="text" name="image[]">'
                            +'<span class="input-group-btn">'
                                +'<a id="lfm_sub_'+n+'" style="color: #fff" data-input="thumbnail_sub_'+n+'" data-preview="preview_image_sub_'+n+'" class="btn btn-primary">'
                                    +'<i class="fa fa-picture-o"></i> Choose'
                                +'</a>'
                            +'</span>'
                            +'<span class="input-group-btn">'
                                +'<a onclick="removeContentImageSub('+n+')" style="color: #fff"  class="btn btn-danger">'
                                    +'<i class="fa fa-times"></i>' 
                                +'</a>'
                            +'</span>'
                        +'</div>'
                        +'<div id="preview_image_sub_'+n+'" style="margin-top:15px;max-width:150px">'
                        +'</div>'
                    +'</div>';
                    console.log(content);
                    $(".image-test").append(content);
                    $("#lfm_sub_"+n).filemanager("image");
                    n++;
        }   
        
        $('#lfm').filemanager('image');
        function removeContentImageSub(n){
            $(".content-image-sub-"+n).remove();
        }
        
        
    </script>
@endsection