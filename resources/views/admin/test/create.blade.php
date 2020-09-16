@extends('templates.admin.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/test.css') }}" />
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
   
    <div class="table-responsive">
        <h2>Tạo đề thi</h2>
        <div class="table-wrapper">
            <div class="table-title">
                
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Ma trận</h3>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="more-less glyphicon glyphicon-plus"></i>Chi tiết ma trận
                                        </a>
                                    </h4>
                                </div>  
                                <div id="collapseOne" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item">{{ $matrix->name }}</a>
                                            <a href="#" class="list-group-item">{{ $matrix->number_question }}</a>
                                            <a href="#" class="list-group-item">{{ $matrix->group->name }}</a>
                                            <a href="#" class="list-group-item">{{ $matrix->subject->name }}</a>
                                            <input type="hidden" name="" id="matrixId" value="{{ $matrix->id }}">
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="more-less glyphicon glyphicon-plus"></i>Tạo đề thi tự động  
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                       <button onclick="created_auto({{ $matrix->id }})" type="submit" class="btn btn-success">Tạo đề thi</button>
                                    </div>
                                </div>
                            </div>
                
                            <div class="panel panel-default">
                                <div class="panel-heading" onclick="collapseHandsome()"  role="tab" id="headingThere">
                                    <h4 class="panel-title">
                                        <a class="collapsed"  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThere" aria-expanded="false" aria-controls="collapseThere">
                                            <i class="more-less glyphicon glyphicon-plus"></i> Tạo đề thi thủ công
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThere" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThere">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="">Chuyên đề</label>
                                            <select onchange="selectTopic(this.value)" class="select-topic browser-default custom-select">
                                                @foreach ($details as $detail)
                                                <option  value="{{ $detail->topic_id }}">{{ $detail->topic->name }}</option> 
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phân loại</label>
                                            <select  onchange="selectDifficult(this.value)" class="select-difficult browser-default custom-select">
                                                <option selected value="1">Nhận biết</option>
                                                <option value="2">Thông hiểu</option>
                                                <option value="3">Vận dụng</option>
                                                <option value="4">Vận dụng cao</option>
                                            </select>
                                        </div>
                                        <div class="list-group">
                                            <a href="#" id="numberMatrix" class="list-group-item">Số lượng câu hỏi ma trận: {{ $matrix->number_question }}</a>
                                            <a href="#" id="numberQuestion" class="list-group-item"></a>
                                            <a href="#" id="numberTopicMatrix"class="list-group-item"> Số câu tối đa: <p  ></p> </a>
                                            <a href="#" id="numberChoose"class="list-group-item"></a>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                           Chi tiết ma trận
                                        </a>
                                    </h4>
                                </div>

                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <a href="#" class="list-group-item">{{ $matrix->name }}</a>
                                            <a href="#" class="list-group-item">{{ $matrix->number_question }}</a>
                                            <a href="#" class="list-group-item">{{ $matrix->group->name }}</a>
                                            <a href="#" class="list-group-item">{{ $matrix->subject->name }}</a>
                                            <input type="hidden" name="" id="matrix_id" value="{{ $matrix->id }}">
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Description

                                                </a>
                                    </h4>
                                </div>

                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Goals

                                                </a>
                                    </h4>
                                </div>

                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit </p>
                                    </div>
                                </div>
                            </div>

                        </div>  --}}
                    </div>
                    <div class="col-sm-8 content_test">
                        <div class="row">
                            <div class="col-md-5 "   >
                                <h4>Tổng số câu hỏi</h4>
                                <div class="overflow-auto rounded border border-primary" style="height:250px;">
                                    <table class="table" style="position: relative;"  width="100%">
                                        <thead >
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="selectAll" >
                                                    <label class="custom-control-label" for="selectAll"></label>
                                                  </div>
                                            </th>
                                            <th scope="col">#</th>
                                            <th scope="col">Content</th>
                                          </tr>
                                        </thead>
                                        <tbody class="box-export"  align="justify">
                                       
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            <div class="col-md-2 double-button">
                                <button class="btn btn-outline-primary" onclick="export_question()" type="button"><i class="fa fa-2x fa-angle-double-right"></i></button>
                                <button class="btn btn-outline-primary" onclick="import_question()" type="button"><i class="fa fa-2x fa-angle-double-left"></i></button>
                            </div>
                            <div class="col-md-5">
                                <h4>Câu hỏi ra đề</h4>
                                <div class="overflow-auto rounded border border-primary"style="height:250px;">
                                    <table class="table"  width="100%">
                                        <thead>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="selectAll" >
                                                    <label class="custom-control-label" for="selectAll"></label>
                                                  </div>
                                            </th>
                                            <th scope="col">#</th>
                                            <th scope="col">Content</th>
                                          </tr>
                                        </thead>
                                        <tbody class="box-import" >

                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px">
                            <h3>Nội dung</h3>
                            <div class="overflow-auto rounded border border-primary" style="height: 300px; width:100%" >
                                
                                <div class="box_content" style="margin:20px">

                                </div>

                            </div>

                        </div>
                    </div>
                    <button type="submit" onclick="store()" class="btn btn-success">SAVE</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection