@extends('templates.admin.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/form_crud.css') }}">
@endsection
@section('js')
    <script src="{{ asset('js/admin/test.js') }}"></script>
@endsection
@section('content')

<div class="container-xl">
    <h2>Nội dung bài thi</h2>
    <div class="table-responsive">
        <div class="table-wrapper">
            <form id="testing_form">
                @foreach ($questions as $key=> $question)
                @php
                $STT=$key+1;
                @endphp
                <div class="question" id="question_{{ $STT }}">
                <div class="myquestionarea" onload="getAnswer({{ $question->id }})" id="testing_answer_{{ $question->id }}_{{ $STT }}">
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
                
            <div style="float: right" >
                <button type="button" class="btn btn-danger" onclick="cancel_test({{ $test_id }})">Hủy bỏ</button>
                <button type="button"  class="btn btn-success" onclick="config({{ $test_id }})">Tiếp tục</button>
            </div>  
        </div>
    </div>
</div>
@endsection        

{{--  @foreach ($contents as $item)
{{ $item }}
@endforeach    --}}