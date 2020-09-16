<?php

namespace App\Http\Controllers\Admin;

use App\Model\ToeicScale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Exports\ToeicScaleExport;
use App\Imports\ToeicScaleImport;
use Maatwebsite\Excel\Facades\Excel;

class AdminToeicScaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paginate=10;
        $data['scales']=ToeicScale::paginate($paginate);
        // $data['questions']=Question::with('answers')->where('test_id',$id)->paginate($paginate);
        $currentPage = $request->page;
        if($currentPage==''){ 
            $currentPage=1;
        }
        $data['start'] = ($currentPage-1)*$paginate;
        // dd($data);
        return view('admin.toeicScale.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request){
        $validate=$request->validate([
            'file'=>'required|mimes:xls,xlsx'
        ]);
        $file=$request->file('file');
            Excel::import(new ToeicScaleImport,$file);
            return back();
        // if($data->count()>0){
        //     foreach($data->toArray() as $key =>$value){
        //         foreach($value as $row){
        //             $insert[]=array(
        //                 'number_correct'=>$row['number_correct'],
        //                 'score_listening'=>$row['score_listening'],
        //                 'score_reading'=>$row['score_reading'],
        //             );
        //         }
        //     }
        // }
        // if(!empty($insert)){
        //     DB::table('toeic_scales')->insert($insert);
        // }
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ToeicScale  $toeicScale
     * @return \Illuminate\Http\Response
     */
    public function show(ToeicScale $toeicScale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ToeicScale  $toeicScale
     * @return \Illuminate\Http\Response
     */
    public function edit(ToeicScale $toeicScale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ToeicScale  $toeicScale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ToeicScale $toeicScale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ToeicScale  $toeicScale
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToeicScale $toeicScale)
    {
        //
    }
}
