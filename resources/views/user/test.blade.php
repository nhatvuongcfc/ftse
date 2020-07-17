@extends('templates.user.footer') @extends('templates.user.navbar') @extends('templates.user.header')
@section('css')
<link rel="stylesheet" href="{{ asset('css/user/test.css') }}" />
@endsection 
@section('content')
<div id="main" class="full_test">
   {{-- <div class="container"> --}}
      <div class="row">
         <div class="col col-md-8 col-sm-8 col-xs-12">
            <div class="col_box_test" id="box_test_one">
               <h1>{{ $test->name }}</h1>
               <input type="hidden" class="input_test_id" value="{{ $test->id }}">
                  <form id="testing_form">
                     @foreach ($questions as $key=> $question)
                     @php
                        $STT=$key+1;
                     @endphp
                     <div class="question" id="question_{{ $STT }}">
                        <div class="myquestionarea" id="testing_answer_{{ $question->id }}_{{ $STT }}">
                           <p><b>Question {{ $STT }}</b></p>
                           <div class="alert alert-warning">
                              <p>{{ $question->content }}</p>
                           </div>
                           @php
                           $answers=$question->answers;
                           $alphabel=array('A','B','C','D');
                           @endphp
                           <div>
                              @foreach($answers as $key=> $answer)
                                 <label class="fulltest_answer_label" id="test_answer_label_{{ $answer->id }}">
                                    <input type="radio" class="fulltest_answer_input" data-answer="{{ $answer->id }}" data-question="{{ $question->id }}" data-iquestion="{{ $STT }}"  name="answer[{{ $question->id }}]"  />
                                    <strong for="{{ $answer->id }}" class="alphabel">{{ $alphabel[$key] }}</strong> 
                                    <span>
                                       <p>{{ $answer->content }}</p>
                                    </span>
                                 </label>
                              @endforeach
                           </div>
                        </div>
                     </div>  
                     @endforeach
                     
                  </form>
                  <div class="pageing" id="fulltest_page" data-page="1" data-limit="51">
                     <button type="submit" class="btn btn-success" onclick="submit_test()">Nộp bài</button>
                 </div>  
            </div>
            
            {{--  {{ $questions->links() }}  --}}
         </div>
         <div class="col col-md-4 col-sm-4 col-xs-12" id="test_col_right">
         <div class="box_ketqua" id="test_ketqua" id="myScrollspy">
            <div class="head color-full">
               <div class="timer" id="show_count_down ">
                  <div id="tiles" class=""></div>
                  <input type="hidden" id="set-time" value="{{ $test->time }}" />
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="list box-question" >
               <div class="scrollbar-inner" id="fulltest_question_shortcut">
                  @for ($i = 1; $i <= $test->number_question; $i++)
                  <div class="cau cau_{{ $i }}" data-page="1" data-question="136261">
                     <a href="#question_{{ $i }}">{{ $i }}</a>
                  </div>
                  @endfor
               </div>
            </div>
         </div>
      </div>
      </div>
      
   {{-- </div> --}}
</div>
</div>
@endsection 
@section('js')
<script src="{{ asset('js/user/test.js') }}"></script>
@endsection

