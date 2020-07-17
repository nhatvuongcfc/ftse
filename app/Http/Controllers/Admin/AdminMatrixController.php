<?php

namespace App\Http\Controllers\Admin;

use App\Model\Matrix;
use App\Model\MatrixDetail;
use App\Model\Subject;
use App\Model\Group;
use App\Model\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class AdminMatrixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['matrices']=Matrix::with(['subject','group'])->get();
        return view('admin.matrix.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['subjects']=Subject::get();
        $data['groups']=Group::get();
        return view('admin.matrix.create',$data);
    }
    public function getTopic(Request $request)
    {
        $data['details']=MatrixDetail::where('matrix_id',$request->matrix_id)->get();
        $data['topics']=Topic::where('subject_id',$request->subject_id)
                            ->where('group_id',$request->group_id)
                            ->get();
        return response()-> json($data);    
    }
    
    public function checkbox(Request $request)
    {
        $array=$request->array;
        if(is_array($array)){
            $data['topics']=Topic::whereIn('id',$array)->get();
            return response()-> json($data);   
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matrix=new Matrix();
        $matrix->name=$request->name;
        $matrix->number_question=$request->number_question;
        $matrix->subject_id=$request->subject_id;
        $matrix->group_id=$request->group_id;
        $matrix->save();
        $matrix_id=$matrix->id;
        for($i=0; $i<count($request->arr_topic); $i++){
            $detail=new MatrixDetail();
            $detail->matrix_id=$matrix_id;
            $detail->topic_id=$request->arr_topic[$i];
            $detail->NB=$request->arr_NB[$i];
            $detail->TH=$request->arr_TH[$i];
            $detail->VD=$request->arr_VD[$i];
            $detail->VC=$request->arr_VC[$i];
            $detail->save();
        }
        return response()-> json([
            'msg'=>'create',
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MatrixTest  $matrixTest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['subjects']=Subject::get();
        $data['groups']=Group::get();
        $data['matrix']=Matrix::findOrFail($id)
                                ->with(['subject','group'])
                                ->first();
        // TỔNG SỐ CÂU HỎI 
        $number_question=$data['matrix']->number_question;
        //   
        $details=MatrixDetail::with('topic')->where('matrix_id',$id)->get();
        // TỔNG CÂU HỎI THEO CHỦ ĐỀ
        $sum_topic=array();
        foreach($details as $detail){
            $topic_id= $detail->topic_id;
            $sum=DB::table('matrices_detail')
                ->where('topic_id',$topic_id)
                ->sum(DB::raw('NB+TH+VD+VC'));
            array_push($sum_topic,$sum);    
        }
        // PHẦN TRĂM CÂU HỎI THEO CHỦ ĐỀ
        $per_topic=array();
        foreach($sum_topic as $item){
            $persent=$item/$number_question *100 ;
            array_push($per_topic,$persent);
        } 
        //TỔNG CÂU HỎI THEO ĐỘ KHÓ
        $sum_difficult=array();
        $NB=DB::table('matrices_detail')
                ->where('matrix_id',$id)->sum('NB');
        $TH=DB::table('matrices_detail')
                ->where('matrix_id',$id)->sum('TH');
        $VD=DB::table('matrices_detail')
                ->where('matrix_id',$id)->sum('VD');
        $VC=DB::table('matrices_detail')
                ->where('matrix_id',$id)->sum('VC');
        array_push($sum_difficult,$NB,$TH,$VD,$VC); 
        //PHẦN TRĂM CÂU HỎI THEO ĐỘ KHÓ  
        $per_difficult=  array();
        foreach($sum_difficult as $item){
            $persent=$item/$number_question *100 ;
            array_push($per_difficult,$persent);
        }   
        $data['details']=$details;
        $data['number_question']=$number_question;
        $data['sum_difficult']=$sum_difficult;
        $data['per_difficult']=$per_difficult;
        $data['sum_topic']=$sum_topic;
        $data['per_topic']=$per_topic;
        return view('admin.matrix.show',$data);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Request  $Request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['subjects']=Subject::get();
        $data['groups']=Group::get();
        $data['matrix']=Matrix::findOrFail($id)
                                ->with(['subject','group'])
                                ->first();
        // TỔNG SỐ CÂU HỎI 
        $number_question=$data['matrix']->number_question;
        //   
        $details=MatrixDetail::with('topic')->where('matrix_id',$id)->get();
        // TỔNG CÂU HỎI THEO CHỦ ĐỀ
        $sum_topic=array();
        foreach($details as $detail){
            $topic_id= $detail->topic_id;
            $sum=DB::table('matrices_detail')
                ->where('topic_id',$topic_id)
                ->sum(DB::raw('NB+TH+VD+VC'));
            array_push($sum_topic,$sum);    
        }
        // PHẦN TRĂM CÂU HỎI THEO CHỦ ĐỀ
        $per_topic=array();
        foreach($sum_topic as $item){
            $persent=$item/$number_question *100 ;
            array_push($per_topic,$persent);
        } 
        //TỔNG CÂU HỎI THEO ĐỘ KHÓ
        $sum_difficult=array();
        $NB=DB::table('matrices_detail')
                ->where('matrix_id',$id)->sum('NB');
        $TH=DB::table('matrices_detail')
                ->where('matrix_id',$id)->sum('TH');
        $VD=DB::table('matrices_detail')
                ->where('matrix_id',$id)->sum('VD');
        $VC=DB::table('matrices_detail')
                ->where('matrix_id',$id)->sum('VC');
        array_push($sum_difficult,$NB,$TH,$VD,$VC); 
        //PHẦN TRĂM CÂU HỎI THEO ĐỘ KHÓ  
        $per_difficult=  array();
        foreach($sum_difficult as $item){
            $persent=$item/$number_question *100 ;
            array_push($per_difficult,$persent);
        }   
        $data['details']=$details;
        $data['number_question']=$number_question;
        $data['sum_difficult']=$sum_difficult;
        $data['per_difficult']=$per_difficult;
        $data['sum_topic']=$sum_topic;
        $data['per_topic']=$per_topic;
        return view('admin.matrix.update',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MatrixTest  $matrixTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd(count($request->arr_topic));
        // dd($request->arr_topic);
     
        $matrix=Matrix::where('id',$request->matrix_id)->first();
        $matrix->name=$request->name;
        $matrix->number_question=$request->number_question;
        $matrix->subject_id=$request->subject_id;
        $matrix->group_id=$request->group_id;
        $matrix->save();
        for($i=0; $i<count($request->arr_topic); $i++){
            $detail=MatrixDetail::where('matrix_id',$request->matrix_id)->first();
            $detail->topic_id=$request->arr_topic[$i];
            $detail->NB=$request->arr_NB[$i];
            $detail->TH=$request->arr_TH[$i];
            $detail->VD=$request->arr_VD[$i];
            $detail->VC=$request->arr_VC[$i];
            $detail->save();
        }
        return response()-> json([
            'msg'=>'update',
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MatrixTest  $matrixTest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details=MatrixDetail::where('matrix_id',$id)->get();
        foreach($details as $detail){
            $detail->delete();
        }
        // dd($detail);
        
        // $detail->delete();
        $matrix=Matrix::findOrFail($id);
        $matrix->delete();
        return response()->json(['202']);

    }
    public function destroySome(Request $request)
    {
        foreach($request->array as $id){
            $details=MatrixDetail::where('matrix_id',$id)->get();
            foreach($details as $detail){
                $detail->delete();
            }
            $matrix=Matrix::findOrFail($id);
            $matrix->delete();
        }
     
        return response()->json(['202']);
    }
    
    public function destroyAll()
    {   
        // DB::table('matrices_detail')->delete();
        // DB::table('matrices')->delete();
       
        MatrixDetail::query()->delete();
        Matrix::query()->delete();
        return response()->json(['202']);
    }
}
