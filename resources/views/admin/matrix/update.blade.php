@extends('templates.admin.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
@endsection
@section('js')
    <script src="{{ asset('js/admin/matrix.js') }}"></script>
    {{--  <script src="{{ asset('js/admin/matrixEdit.js') }}"></script>  --}}
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
                              <input type="text" value="{{ $matrix->name }}"  required class="form-control" id="name_matrix" placeholder="Tên ma trận">
                              <input type="hidden" id="matrixId" value="{{ $matrix->id }}"  required class="form-control" id="name_matrix" placeholder="Tên ma trận">
                            </div>
                          
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Khối lớp</label>
                                <select id="selectGroup" onchange="selectGroup(this.value)"  class="browser-default custom-select">
                                    @foreach ($groups as $group)
                                        @if( $matrix->group_id == $group->id)
                                            <option selected class="alert alert-danger" value="{{ $group->id }}">{{ $group->name }}</option>    
                                        @else
                                            <option value="{{ $group->id }}">{{ $group->name }}</option> 
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Môn học</label>
                                <select id="selectSubject" onchange="selectSubject(this.value)"  class="browser-default custom-select">
                                    @foreach ($subjects as $subject)
                                        @if( $matrix->subject_id == $subject->id)
                                            <option selected class="alert alert-danger" value="{{ $subject->id }}">{{ $subject->name }}</option>    
                                        @else
                                            <option value="{{ $subject->id }}">{{ $subject->name }}</option> 
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="number_question">Số lượng câu hỏi</label>
                                <div class=" def-number-input number-input safari_only">
                                    <button onclick="minusTotalQuestion()" class="minus"></button>
                                    <input  name="number" onfocus="focusInput(this)" class="total-question" value="{{ $matrix->number_question }}" min="0" value="0" type="number">
                                    <button onclick="plusTotalQuestion(this)" class="plus"></button>
                                </div>
                            </div>
                            <button  style="float: left" onclick="getTopic()" class="btn btn-success">Lọc chuyên đề</button>

                            
                    </div>
                    <div class="col">
                        
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Chuyên đề</label>
                            <div class="topic">
                            </div>
                            <input type="hidden" name="" id="numberRowMatrix" value="1">

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
                        <tbody  >
                            @php
                            $arr_difficult = array('NB', 'TH', 'VD', 'VC');
                            @endphp
                            @for($i = 0; $i <count($details); $i++)
                                @php
                                $arr_difficult = array('NB', 'TH', 'VD', 'VC');
                                $key=$i+1;
                                @endphp
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>
                                        <div class="tag">
                                            <input type="checkbox" class="topic_matrix" value="{{ $details[$i]->topic->id  }}" />
                                            <label for="">{{ $details[$i]->topic->name }}</label>
                                            {{--  // '<i class="fa fa-times-circle"></i>'   --}}
                                            </div>
                                    </td>
                                    @foreach ($arr_difficult as $difficult)
                                        @php
                                            $id=$difficult.$key;
                                        @endphp
                                        <td class="cell_number">
                                            <div class=" def-number-input number-input safari_only">
                                            <button onclick="minus({{ $id }})"  class="minus"></button> 
                                            <input onfocus="focus_input(this)" data-topic="{{$details[$i]->topic->id}}" 
                                            onchange="change_number(this)" onkeyup="change_number(this)" 
                                            class="number_matrix number_{{ $difficult }}" 
                                            id="{{ $id }}" name="{{ $id }}"
                                            min="0" value="{{ $details[$i]-> $difficult}}" type="number">
                                            <button onclick="plus({{ $id }})"  class="plus"></button>
                                            </div>
                                        </td>  
                                    @endforeach    
                                    @for($j = $i; $j<=$i && $j<count($sum_topic); $j++)
                                    <td id="number_topic_{{ $key }}" class="cell_number">{{ $sum_topic[$j] }}</td>
                                    @endfor
                                    @for($k = $i; $k<=$i && $k<count($per_topic); $k++)
                                    <td id="persent_topic_{{ $key }}" class="cell_number">{{ $per_topic[$k]."%" }}</td>
                                    @endfor
                                </tr>    
                            @endfor
                            <tr>
                                <th colspan="2" style="text-align: center">Tổng số câu</th>
                                @for($i = 0; $i < count($sum_difficult); $i++)
                                    @for($j = $i; $j<=$i && $j < count($arr_difficult); $j++)
                                        <th id="sum_{{ $arr_difficult[$j] }}" class="cell_number" style="font-size: 18px">{{ $sum_difficult[$i] }}</th>    
                                    @endfor
                                @endfor
                                <th id="number_question_matrix" class="cell_number" >{{ $number_question }}</th>
                                <th></th>
                            </tr>
                            <tr>
                                <th colspan="2"  style="text-align: center">%</th>
                                @for($i = 0; $i < count($per_difficult); $i++)
                                    @for($j = $i; $j<=$i && $j < count($arr_difficult); $j++)
                                        <th id="persent_{{ $arr_difficult[$j] }}" class="cell_number" style="font-size: 18px">{{ $per_difficult[$i]."%" }}</th>    
                                    @endfor
                                @endfor
                                <th></th>
                                <th id="persent_question" class="cell_number">100%</th>
                            </tr>
                        </tbody>
                        
                    </table>
                </div>
                <button  style="float: right" onclick="submit()" class="btn btn-success">SAVE</button>
        </div>
    </div>
</div>
@endsection