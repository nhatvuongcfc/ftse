<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\FullTest;
use App\Model\FileListening;
use App\Model\Question;
use App\Model\CorrectAnswer;
use App\Model\ToeicScale;
use App\Model\ResultFullTest;
use Illuminate\Support\Facades\Auth;

class StudentFullTestController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }
    public function index(){
        $data['fullTests']=FullTest::Status()->get();
        return view('student.fulltest.index', $data);
    }
    public function show($slug){
        $data['fullTest']=FullTest::where('slug',$slug)->first();
        $fullTestId=$data['fullTest']->id;
        // dd($fullTestId);
        $data['fileListening']=FileListening::where('full_test_id',$fullTestId)->first();
        $data['questions']=Question::where('full_test_id',$fullTestId)
                                    ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                                    ->leftJoin('file_images', 'questions.id', '=', 'file_images.question_id')
                                    ->get();
        return view('student.fulltest.show',$data);
    }
    public function store(Request $request){
        $user_id = Auth::user()->id;
        $tasks=$request->tasks;
        $full_test_id=$request->full_test_id;
        $count_listening=0;
        $count_reading=0;
        $arrCorrect=[];
        foreach ($tasks as $key => $task) {
            $correct_answer=CorrectAnswer::where('full_test_id',$full_test_id)
                                        ->where('answer','like','%'.$task['answer'].'%')
                                        ->where('index',$task['index'])->first();
            if($correct_answer!=null){
                if($task['index']>100){
                    $count_reading++;
                }
                else{
                    $count_listening++;
                }
            }                            
        }
        $listening=ToeicScale::where('number_correct',$count_listening)->first();
        $score_listening=$listening->score_listening;
        $reading=ToeicScale::where('number_correct',$count_reading)->first();
        $score_reading=$reading->score_reading;
        $total=$score_listening+$score_reading;

        $result=new ResultFullTest();
        $result->full_test_id=$full_test_id;
        $result->user_id=$user_id;
        $result->number_correct_listening=$count_listening;
        $result->score_listening=$score_listening;
        $result->number_correct_reading=$count_reading;
        $result->score_reading=$score_reading;
        $result->score_total=$total;
        $result->save();
        $$result->id;
    }
}
