<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Test;
use App\Model\Question;
use App\Model\Answer;
use App\Model\Task;
use App\Model\DetailTask;
use DB;
use Illuminate\Pagination\Paginator;
class UserTestController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }
    public function index(Request $request){
        $id=2;
        $paginate=5;
        $data['test']=Test::find($id);
        $data['questions']=Question::with('answers')->where('test_id',$id)->get();
        // $data['questions']=Question::with('answers')->where('test_id',$id)->paginate($paginate);
        // $currentPage = $request->page;
        // if($currentPage==''){ 
        //     $currentPage=1;
        // }
        // $data['start'] = ($currentPage-1)*$paginate;
        return view('user.test',$data);
        // return response()-> json([
        //     'data'=>$data
        // ]);
    }
    public function submit(Request $request){
        $task=new Task();
        $task->student_id=$request->user_id;
        $task->test_id=$request->test_id;
        $task->save();
        $task_id=$task->id;

        $tasks=$request->tasks;
        for ($i=0; $i <count($tasks) ; $i++) { 
            $detail=new DetailTask();
            $detail->question_id=$tasks[$i]['question'];
            $detail->answer_id=$tasks[$i]['answer'];
            $detail->task_id=$task_id;
            $detail->save();
        }
        $answer_true=DB::table('detail_tasks')
            ->join('answers', 'detail_tasks.answer_id', '=', 'answers.id')
            ->where('task_id',$task_id)
            ->where('answers.isTrue','1')
            ->count();
        $number_question=Test::where('id',$request->test_id)->select('number_question')->first();
        $number_question=$number_question->number_question;
        $point=(10/$number_question)*$answer_true;
        $task=Task::find($task_id);
        $task->point=$point;
        $task->save();
        return response()-> json([
            'status'=>'200'
        ]);

    }
    
}
