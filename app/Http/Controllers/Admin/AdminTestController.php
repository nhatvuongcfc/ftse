<?php

namespace App\Http\Controllers\Admin;

use App\Model\Test;
use App\Model\Exam;
use App\Model\Matrix;
use App\Model\MatrixDetail;
use App\Model\Question;
use App\Model\Answer;
use App\Model\TestSample;
use App\Model\TestPermutation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class AdminTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tests']=Test::with('matrix.subject')->with('matrix.group')->get();
        return view('admin.test.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function matrix()
    {
        $data['matrices']=Matrix::with(['subject','group'])->get();
        return view('admin.test.matrix',$data);
    }
    public function created(Request $request)
    {
        // dd($request->matrix_id);
        $data['matrix']=Matrix::findOrFail($request->matrix_id)
                        ->with(['subject','group'])
                        ->first();
        $data['details']=MatrixDetail::where('matrix_id',$request->matrix_id)->with('topic')->get();    
        return view('admin.test.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matrix_id=session()->get('matrix_id');
        $test_id=session()->get('test_id');
        $test=Test::where('id',$test_id)->first();
        $test->name=$request->name;
        $test->timer=$request->timer;
        $test->time=date("Y-m-d H:i:s", strtotime($request->time));
        $test->exam_id=$request->exam;
        $test->matrix_id=$matrix_id;
        $test->isOnline=$request->isOnline;
        $test->save();  
        // $this->test_permutation($test_id,$request->number_permutation,implode(',',$request->name_code));
        // dd('ok'); 
        $number=$request->number_permutation;  
        $name_code=$request->name_code;  
        $lastId=TestPermutation::orderBy('permutation_id', 'desc')->first();
        if($lastId==null){
            $permutation_id=1;
        }
        else{
            $permutation_id=$lastId->permutation_id;
        }
        $samples=TestSample::where('test_id',$test_id)->get();
        $arr_samples=[];
        foreach($samples as $sample){
            array_push($arr_samples,$sample->question_id);
        }
        for($i=0; $i<$number;$i++){
            if($name_code[0]==null){
                $code=rand(100,999);
                shuffle($arr_samples);
                foreach($arr_samples as $sample){
                    $permutation=new TestPermutation();
                    $permutation->permutation_id=$permutation_id+$i;
                    $permutation->name_code=$code;
                    $permutation->test_id=$test_id;
                    $permutation->question_id=$sample;
                    $permutation->save();
                }
            }
            else{
                for($j=$i; $j<=$i && $j<$name_code; $j++){
                    shuffle($arr_samples);
                    foreach($arr_samples as $sample){
                        $permutation=new TestPermutation();
                        $permutation->permutation_id=$permutation_id+$i;
                        $permutation->name_code=$name_code[$j];
                        $permutation->test_id=$test_id;
                        $permutation->question_id=$sample;
                        $permutation->save();
                    }
                }
            }    
        }
        $request->session()->forget('matrix_id');
        $request->session()->forget('test_id');
        
        response()->json(array('success' => true));  
    }
    // public static function test_permutation($test_id,$number,$name_code)
    // {
    //     $name_code=explode(',',$name_code);
    //     $lastId=TestPermutation::orderBy('permutation_id', 'desc')->first();
    //     if($lastId==null){
    //         $permutation_id=1;
    //     }
    //     else{
    //         $permutation_id=$lastId->permutation_id;
    //     }
    //     $samples=TestSample::where('test_id',$test_id)->get();
    //     $arr_samples=[];
    //     foreach($samples as $sample){
    //         array_push($arr_samples,$sample->question_id);
    //     }
    //     for($i=0; $i<$number;$i++){
    //         if($name_code[0]==""){
    //             $code=rand(100,999);
    //             shuffle($arr_samples);
    //             foreach($arr_samples as $sample){
    //                 $permutation=new TestPermutation();
    //                 $permutation->permutation_id=$permutation_id+$i;
    //                 $permutation->name_code=$code;
    //                 $permutation->test_id=$test_id;
    //                 $permutation->question_id=$sample;
    //                 $permutation->save();
    //             }
    //         }
    //         else{
    //             for($j=$i; $j<=$i && $j<$name_code; $j++){
    //                 shuffle($arr_samples);
    //                 foreach($arr_samples as $sample){
    //                     $permutation=new TestPermutation();
    //                     $permutation->permutation_id=$permutation_id+$i;
    //                     $permutation->name_code=$name_code[$j];
    //                     $permutation->test_id=$test_id;
    //                     $permutation->question_id=$sample;
    //                     $permutation->save();
    //                 }
    //             }
    //         }    
    //     }
    //     // retur    n;
    //     // dd(session()->forget('matrix_id'));
    //     // $request->session()->forget('matrix_id');
    //     // $request->session()->forget('test_id');
    //     // return $status='202';


    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
    public function createdAuto(Request $request)
    {
      
        $details=MatrixDetail::where('matrix_id',$request->matrix_id)->get();
        $arr_question=[];
        foreach($details as $detail){
            $arr=[];
            $topic_id=$detail->topic_id;
            $arr[]=$detail->NB;
            $arr[]=$detail->TH;
            $arr[]=$detail->VD;
            $arr[]=$detail->VC;
            for($i=0; $i<count($arr); $i++){
                $questions=Question::select('id')
                                ->where('topic_id',$topic_id)
                                ->where('difficult_id',$i+1)
                                ->inRandomOrder()
                                ->limit($arr[$i])
                                ->get();
                foreach($questions as $question){
                    $arr_question[]=$question;
                }                
            }
     
        }
        $test=new Test();
        $test->name='Demo';
        $test->save();
        $test_id=$test->id;
        foreach($arr_question as $item){
            $sample=new TestSample();
            $sample->question_id=$item->id;
            $sample->test_id=$test_id;
            $sample->save();
        }
        \Session::put('matrix_id',$request->matrix_id);
        \Session::put('test_id',$test_id);
        $data['questions']=Question::with('answers')
                            ->join('test_samples','questions.id','test_samples.question_id')
                            ->where('test_samples.test_id',$test_id)
                            ->get('questions.*','answers.id as anwsers_id','answers.content as answers_content');
        return response()-> json($data);   
    }
    public function content($id){
        $data['questions']=Question::with('answers')
                            ->join('test_samples','questions.id','test_samples.question_id')
                            ->where('test_samples.test_id',$id)
                            ->get('questions.*','answers.id as anwsers_id','answers.content as answers_content');
        $data['test_id']=$id;
        // dd($data)->toArray();
        return view('admin.test.content',$data);
    }
    public function cancelTest($id){
        dd($id);
    }
    public function config($id){
        $data['exams']=Exam::get();
        return view('admin.test.config',$data);
    }
    public function getQuestion(Request $request){
        $data['questions']=Question::where('topic_id',$request->topic_id)
                                        ->where('difficult_id',$request->difficult)
                                        ->get();
        $data['number_question']=$data['questions']->count();
        switch($request->difficult){
            case "1":
                $difficult="NB";
                $str="matrices_detail.NB";
            break;
            case "2":
                $difficult="TH";
                $str="matrices_detail.TH";
            break;
            case "3":
                $difficult="VD";
                $str="matrices_detail.VD";
            break;
            case "4":
                $difficult="VC";
                $str="matrices_detail.VC";
            break;
            default:
                $str="matrices_detail.*";
            break;
        }        
        $data['number_matrix']=MatrixDetail::where('topic_id',$request->topic_id)
                                            ->where('matrix_id',$request->matrix_id)
                                            ->select($str)->first();
                                            $data['number_matrix'][0]=$data['number_matrix'][$difficult];
                                            unset($data['number_matrix'][$difficult]);
        // dd($data['number_question']);                                    
                                            
        return response()-> json($data);   

                                                  
    }
}
