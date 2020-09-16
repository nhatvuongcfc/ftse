<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
  <audio controls>
    <source src="{{ asset('audio/TEST01.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
  </audio> 
  <div class="input-group">
    <span class="input-group-btn">
      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Choose
      </a>
    </span>
    <input id="thumbnail" class="form-control" type="text" name="filepath">
  </div>
  <img id="holder" style="margin-top:15px;max-height:100px;">
  <textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
  <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script>
  var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
  $('#lfm').filemanager('image');
  CKEDITOR.replace('my-editor', options);

</script>

</body>
</html>
{{-- ckeditor();
        function ckeditor(){
            for(var i=0; i<arrFormImage.length; i++){
                var image='image'+i;
                var image=CKEDITOR.replace( image, {
                    language:'vi',
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    {{--  filebrowserBrowseUrl: "{{ asset('editor/ckfinder/ckfinder.html') }}",
                    filebrowserImageBrowseUrl: "{{ asset('editor/ckfinder/ckfinder.html?type=Images') }}",
                    filebrowserFlashBrowseUrl: "{{ asset('editor/ckfinder/ckfinder.html?type=Flash') }}",
                    filebrowserUploadUrl: "{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
                    filebrowserImageUploadUrl: "{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
                    filebrowserFlashUploadUrl: "{{ asset('editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}"  --}}
                  {{-- } );
                }
            } --}}
{{-- 
            $(".custom-file-input").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            var arrFormImage=[0];
         
            $('#createFormImage').on('click',function(){
              var index=arrFormImage[arrFormImage.length-1]+1;
              arrFormImage.push(index);
              $("#length").val(arrFormImage.length-1);
              var content="";
              content+= '<div class="m-b-15 formImage'+index+'">'
                            +'<div class="md-form m-b-15 form-group row">'
                                +'<label  class="col-sm-2 col-form-label">Câu:</label>'
                                +'<div class="col-sm-10">'
                                    +'<input type="number"  name="index'+index+'" class="form-control" id="index'+index+'" placeholder="Câu">'
                                +'</div>'
                            +'</div>'
                            +'<textarea name="image'+index+'" class="form-control " id="image'+index+'"  cols="300px"></textarea>'
                        +'</div>';
              $(".file-image").append(content);
              {{-- ckeditor(); --}}
            });
            $('#removeFormImage').on('click',function(){
              var index=arrFormImage[arrFormImage.length-1];
              arrFormImage.splice(index,1);
              $("#length").val(arrFormImage.length-1);
              $(".formImage"+index).remove();
            });
            
          var arrImage=[];
          $(".submit_create").on('click', function(){
              
              for(var i=0; i<arrFormImage.length; i++){
                  var arr=[];
                  arr.push($("#index"+i).val());
                  arr.push( CKEDITOR.instances["image"+i].getData());
                  arrImage.push(arr);
              }
              console.log(arrImage);
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              $.ajax({
                  type: 'post',
                  url: '/admin/fulltest',
                  dataType: "JSON",
                  data: {
                      arrImage:arrImage
                  },
                  success: function(data) {
                    
                  }
              });
          });    --}}