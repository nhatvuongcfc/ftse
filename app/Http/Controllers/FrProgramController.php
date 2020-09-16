<?php

namespace App\Http\Controllers;

use App\Model\Program;
use App\Model\BLog;
use App\Model\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $data['count_category']=Blog::join('categories', 'categories.id', '=', 'blogs.category_id')
        ->select('categories.name as name','categories.slug as slug',DB::raw('count(*) as count'))
        ->groupBy('blogs.category_id')
        ->get();
$data['hot_blog']=Blog::with(['category','user'])->orderBy('view','DESC')->limit(3)->get();
$data['recent_blog']=Blog::with(['category','user'])->orderBy('created_at','DESC')->limit(4)->get();
$data['categories']=Category::status()->get();
$data['blogs']=Blog::with(['category','user'])->get();
$data['popular_blog']=Blog::with(['category','user'])
        ->select('*',DB::raw('max(view)'))
        ->groupBy('category_id')
        ->get();
        $data['program']=Program::status()->where('slug',$slug)->first();
        return view('frontend.program',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }
}
