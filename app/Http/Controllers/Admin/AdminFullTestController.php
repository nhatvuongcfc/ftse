<?php

namespace App\Http\Controllers\Admin;

use App\Model\FullTest;
use App\Model\Question;
use App\Model\Answer;
use App\Model\FileImage;
use App\Model\FileListening;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\FullTestImport;
use App\Imports\CorrectAnswerImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;


class AdminFullTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['fullTests']=FullTest::get();
        return view('admin.fullTest.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('admin.fullTest.create');

    }
    public function import(Request $request){
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrIndex=$request->input('index');
        $arrImage=$request->input('image');
        $fullTest= new FullTest();
        $fullTest->name=$request->name;
        $fullTest->slug=Str::slug($request->name);
        $fullTest->save();
        $full_test_id=$fullTest->id;
        if ( $request->hasFile('audio') ) {
            $file_listening = $request->file('audio');
            $name = $file_listening->getClientOriginalName();
            $file_listening->move('audio', $name);
            $listening=new FileListening();
            $listening->file=$name;
            $listening->full_test_id=$full_test_id;
            $listening->save();
        }
        $file_test=$request->file('file_test');
        $file_correct_answers=$request->file('file_correct_answer');
        Excel::import(new FullTestImport,$file_test);
        Excel::import(new CorrectAnswerImport,$file_correct_answers);
        for ($i=0; $i <count($arrIndex); $i++) { 
            $question=Question::select('id')
                                ->where('full_test_id',$full_test_id)
                                ->where('index',$arrIndex[$i])
                                ->first();
            $question_id=$question->id;
            $fileImage=new FileImage();
            $fileImage->file=$arrImage[$i];
            $fileImage->question_id=$question_id;
            $fileImage->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FullTest  $fullTest
     * @return \Illuminate\Http\Response
     */
    public function show(FullTest $fullTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FullTest  $fullTest
     * @return \Illuminate\Http\Response
     */
    public function edit(FullTest $fullTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FullTest  $fullTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FullTest $fullTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FullTest  $fullTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(FullTest $fullTest)
    {
        //
    }
}
