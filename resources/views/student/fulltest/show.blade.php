@extends('templates.backend.footer') @extends('templates.backend.navbar-student') @extends('templates.backend.header') 
@section('title')
<title>Full Test</title>
@endsection @section('css') @endsection @section('content')
<div class="container-xl content-wrapper">
    <div class="content-header" style="position:fixed; width:100%;background:#fff   ; z-index:1000">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 class="m-0 text-dark">
                        <i class="fa fa-indent" style="color: #007BFF">
                            {{ $fullTest->name }}
                        </i>
                        <input type="hidden" value="{{$fullTest->id}}" id="fullTestId" name="fullTestId"></input>
                    </h2>
                </div>
                
            </div>
        </div>
    </div>
    <section class="full_test content" style="padding-top:50px; background:#fff">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-8">
                    <div class="col_box_test">
                        <div class="part" id="fulltest_part_head">
                            <div class="item" id="test_score" style=" display:none">
                                <a href="javascript:;">
                                    <strong>100</strong>
                                    <span>Score</span>
                                </a>
                            </div>
                        </div>
                        <form id="testing_form" action="https://www.anhngumshoa.com/test/result" method="POST">
                            <div class="clear col_box_baihoc_view" id="fulltest_content">
                                <p class="lead">Look at the picture and listen to the sentences. Choose the sentence that best describes the picture:</p>
                                    @php
                                        $n=1;
                                        $k=0;
                                        $arrImage=[];
                                        $arrAlphabel=['A','B','C','D'];
                                    @endphp
                                    @foreach($questions as $key=> $item)
                                        @php
                                            $part=$item->part_id; 
                                        @endphp
                                        @if ($part==1)
                                            <div data-part="1" class="question fullest_page_4" data-page="4" id="{{ $item->index }}">
                                                <figure><img src="{{ $item->file }}" alt="{{ $item->index }}"></figure> 
                                                <div class="myquestionarea" id="testing_answer_{{ $item->id }}_{{ $item->index }}">
                                                    <p><b>Question {{ $item->index }}:</b></p>
                                                    <div>
                                                    @for($i=0; $i<count($arrAlphabel); $i++)
                                                        @php
                                                            $alpha=$arrAlphabel[$i];
                                                        @endphp
                                                        <label class="fulltest_answer_label" >
                                                            <input type="radio" data-alpha="{{ $alpha }}" data-index="{{ $item->index }}" data-question="{{ $item->id }}" name="answer[137517][0]" value="{{$alpha}}">
                                                            <strong>{{ $alpha }}</strong> <span id="tapescript_answer_795672" class="answer_content"></span>
                                                        </label>
                                                    @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($part==2)
                                            @if($item->index==7)
                                                <p class="lead">Listen to the question and the three responses. Choose the response that best answers the question:</p>
                                            @endif
                                            <div data-part="2" class="question fullest_page_7" data-page="7"  id="{{ $item->index }}">
                                                <div class="myquestionarea" id="testing_answer_{{ $item->id }}_{{ $item->index }}">
                                                    <b>Question {{ $item->index }}: </b>
                                                    @for($i=0; $i<count($arrAlphabel)-1; $i++)
                                                        @php
                                                            $alpha=$arrAlphabel[$i];
                                                        @endphp
                                                        <label class="fulltest_answer_label" >
                                                            <input type="radio" data-alpha="{{ $alpha }}" data-index="{{ $item->index }}" data-question="{{ $item->id }}" name="answer[137517][0]" value="{{$alpha}}">
                                                            <strong>{{ $alpha }}</strong> <span id="tapescript_answer_795672" class="answer_content"></span>
                                                        </label>
                                                    @endfor
                                                </div>
                                            </div>
                                        @elseif($part==3 || $part==4)
                                            @if ($item->index==32)
                                                <p class="lead">Listen to the dialogue. Then read each question and choose the best answer:</p>
                                            @elseif($item->index==71)
                                                <p class="lead">Listen to the talk. Then read each question and choose the best answer:</p>
                                            @endif
                                            <div data-part="3" class="question fullest_page_32" data-page="32"  id="{{ $item->index }}">
                                                @if ($item->file!=null)
                                                    <figure><img src="{{ $item->file }}"></figure>
                                                @endif
                                                <div class="myquestionarea">
                                                    <div class="alert alert-warning answer_content"></div>
                                                    <div id="testing_answer_{{ $item->id }}_{{ $item->index }}">
                                                        <div class="question_number"><b>Question {{ $item->index }}: </b><span>{{ $item->content }}</span></div>
                                                        @for($i=0; $i<count($arrAlphabel); $i++)
                                                            @php
                                                                $alpha=$arrAlphabel[$i];
                                                            @endphp
                                                            <label class="fulltest_answer_label" >
                                                                <input type="radio" data-alpha="{{ $alpha }}" data-index="{{ $item->index }}" data-question="{{ $item->id }}" name="answer[137517][0]" value="{{$alpha}}">
                                                                <strong>{{ $alpha }}</strong> <span>{{ $item->$alpha }}</span>
                                                            </label>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            @if (31+3*$n==$item->index)
                                                <hr>
                                                @php
                                                    $n++;
                                                @endphp
                                            @endif
                                        @elseif($part==5) 
                                            @if ($item->index==101)
                                                <p class="lead">Choose the word that best completes the sentence:</p>
                                            @endif
                                            <div data-part="5" class="question fullest_page_55" data-page="55" id="{{ $item->index }}">
                                                <div class="myquestionarea" id="testing_answer_{{ $item->id }}_{{ $item->index }}">
                                                    <p><b>Question {{ $item->index }}:</b></p>
                                                    <div class="alert alert-warning">
                                                    <p class="text-dark">{{ $item->content }}</p>
                                                    </div>
                                                    @for($i=0; $i<count($arrAlphabel); $i++)
                                                        @php
                                                            $alpha=$arrAlphabel[$i];
                                                        @endphp
                                                        <label class="fulltest_answer_label" >
                                                            <input type="radio" data-alpha="{{ $alpha }}" data-index="{{ $item->index }}" data-question="{{ $item->id }}" name="answer[137517][0]" value="{{$alpha}}">
                                                            <strong>{{ $alpha }}</strong> <span>{{ $item->$alpha }}</span>
                                                        </label>
                                                    @endfor
                                                </div>
                                            </div>
                                        @elseif($part==6)
                                            @if($item->index==131)
                                                <p class="lead">Choose the word or phrase that best completes the blanks:</p>
                                            @endif
                                            @if ($item->file!=null)
                                                <div class="alert alert-warning">
                                                    <figure><img alt="" src="{{ $item->file }}" style="width: 723px;"></figure>
                                                </div>
                                            @endif
                                            <div data-part="6" class="question fullest_page_85" data-page="85" id="{{ $item->index }}">
                                                <div class="myquestionarea">
                                                    <div id="testing_answer_{{ $item->id }}_{{ $item->index }}">
                                                        <div class="question_number"><b>Question {{ $item->index }}: </b></div>
                                                        @for($i=0; $i<count($arrAlphabel); $i++)
                                                            @php
                                                                $alpha=$arrAlphabel[$i];
                                                            @endphp
                                                            <label class="fulltest_answer_label" >
                                                                <input type="radio" data-alpha="{{ $alpha }}" data-index="{{ $item->index }}" data-question="{{ $item->id }}" name="answer[137517][0]" value="{{$alpha}}">
                                                                <strong>{{ $alpha }}</strong> <span>{{ $item->$alpha }}</span>
                                                            </label>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif($part==7)
                                            @if($item->index==147)
                                                <p class="lead">Read the passage and choose the correct answer:</p>
                                            @endif
                                            @if($questions[$key]->file!=null)
                                                @php
                                                    array_push($arrImage,$key);
                                                    $k=$key;
                                                @endphp
                                            @else
                                                @if($arrImage!=[])
                                                    <div class="alert alert-danger">
                                                        @for($i = 0; $i < count($arrImage); $i++)
                                                            <p style="text-align: center;">
                                                                <img alt="" src="{{ $questions[$arrImage[$i]]->file }}" style="width: 500px;">
                                                            </p>
                                                        @endfor
                                                    </div>
                                                    <div data-part="7" class="question fullest_page_89" data-page="89" id="{{ $questions[$k]->index }}">
                                                        <div class="myquestionarea">
                                                            <div id="testing_answer_{{ $questions[$k]->id }}_{{ $questions[$k]->index }}">
                                                                <div class="question_number"><b>Question {{ $questions[$k]->index }}: </b><span>{{ $questions[$k]->content }} </span></div>
                                                                    @for($i=0; $i<count($arrAlphabel); $i++)
                                                                        @php
                                                                            $alpha=$arrAlphabel[$i];
                                                                        @endphp
                                                                        <label class="fulltest_answer_label">
                                                                            <input type="radio" data-alpha="{{ $alpha }}" data-index="{{ $questions[$k]->index }}" data-question="{{ $questions[$k]->id }}" name="answer[137517][0]" value="{{$alpha}}">
                                                                            <strong>{{ $alpha }}</strong> <span>{{ $questions[$k]->$alpha }}</span>
                                                                        </label>
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                @endif
                                            @endif    
                                        @endif
                                    @endforeach




{{-- 





                                    @if($questions[$key]->file!=null)
                                        @php
                                            array_push($arrImage,$key);
                                            $k = $key;
                                        @endphp
                                    
                                    @endif
                                        if($arrImage!=[])
                                            @php
                                            var_dump($arrImage)
                                            @endphp
                                            <div class="alert alert-warning">
                                                @for ($i = 0; $i < count($arrImage); $i++)
                                                    @php
                                                    echo $arrImage[$i];
                                                    @endphp
                                                    <p style="text-align: center;"><img alt="" src="{{ $questions[$arrImage[$i]]->file }}" style="width: 500px;"></p>
                                                @endfor
                                                @php
                                                    $arrImage=[]; 
                                                @endphp
                                            </div>
                                        @endif
                                    @endif
                                @endif    
                                    
                                         @php
                                            echo $questions[$k]->index;
                                        @endphp
                                    @if ($k!="")
                                        <div data-part="7" class="question fullest_page_89" data-page="89" id="{{ $questions[$k]->index }}">
                                    <div class="myquestionarea">
                                        <div id="testing_answer_{{ $item->id }}_{{ $item->index }}">
                                            <div class="question_number"><b>Question {{ $questions[$k]->index }}: </b><span>{{ $questions[$k]->content }} </span></div>
                                            @for($i=0; $i<count($arrAlphabel); $i++)
                                                @php
                                                    $alpha=$arrAlphabel[$i];
                                                @endphp
                                                <label class="fulltest_answer_label" >
                                                    <input type="radio" data-alpha="{{ $alpha }}" data-index="{{ $item->index }}" data-question="{{ $item->id }}" name="answer[137517][0]" value="{{$alpha}}">
                                                    <strong>{{ $alpha }}</strong> <span>{{ $questions[$k]->$alpha }}</span>
                                                </label>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                                    @endif
                                    <div data-part="7" class="question fullest_page_89" data-page="89" id="{{ $item->index }}">
                                    <div class="myquestionarea">
                                        
                                        <div id="testing_answer_{{ $item->id }}_{{ $item->index }}">
                                            <div class="question_number"><b>Question {{ $item->index }}: </b><span>{{ $item->content }} </span></div>
                                            @for($i=0; $i<count($arrAlphabel); $i++)
                                                @php
                                                    $alpha=$arrAlphabel[$i];
                                                @endphp
                                                <label class="fulltest_answer_label">
                                                    <input type="radio" data-alpha="{{ $alpha }}" data-index="{{ $item->index }}" data-question="{{ $item->id }}" name="answer[137517][0]" value="{{$alpha}}">
                                                    <strong>{{ $alpha }}</strong> <span>{{ $item->$alpha }}</span>
                                                </label>
                                            @endfor
                                        </div>
                                    </div>
                                </div> --}}
           
                            </div>
                                <div class="pageing" id="fulltest_page" data-page="1" data-limit="104">
                                    <a href="javascript:void(0)" style="display: none;" data-type="-1" class="button_page back">BACK</a>
                                    <a href="javascript:void(0)" class="button_page next" data-type="1">NEXT</a>
                                    <a id="button_send_answer" class="btn btn-danger" onclick="return mshoatoeic.send_answer_fulltest()">Chấm điểm</a>
                                </div>
                        </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-4  " id="test_col_right" style=" position: relative; padding-top:35px">

                        <div class="box_ketqua " id="test_ketqua" style="position:fixed; margin-right:26px">
                            <div class="head">

                                <a class="check" href="javascript:void(0)" id="test_result" onclick="send_answer_fulltest()"><i></i><span>Chấm điểm</span></a>
                                <div class="timer" id="show_count_down"></div>
                                <a href="javascript:;" onclick="return location.reload()" class="refresh"><i></i><span>Làm lại</span></a>
                                <div style="text-align:center"><audio autoplay src="{{ asset('audio') }}/{{ $fileListening->file}}" controls="play"></audio></div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="list">
                                <div class="scrollbar-inner" id="fulltest_question_shortcut">

                                    @for ($i = 1; $i< 201; $i++) 
                                    <div class="cau cau_{{ $i }}" data-iquestion="1" data-question="137514">
                                        <a href="#{{ $i }}">{{ $i }}</a>
                                        <input class="btn btn-primary" type="hidden" value="">
                                        </div>
                                    @endfor

                                </div>
                               
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection @section('js')
<script src="{{ asset('js/student/toeic.js') }}"></script>
@endsection  
