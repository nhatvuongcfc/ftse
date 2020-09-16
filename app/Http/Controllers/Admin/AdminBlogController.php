<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog;
use App\Model\Category;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Auth;
class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blogs']=Blog::status()
        ->with(['user','category'])
        ->get();
        // dd($data);
        return view('admin.blog.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories']=Category::status()->get();
        return view('admin.blog.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $user_id=Auth::id();
        $blog=new Blog();
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->slug=$request->slug;
        $blog->image=$request->image;
        $blog->category_id=$request->category_id;
        $blog->user_id=$user_id;
        $blog->status=1;
        $blog->save();
        return view('admin.blog.index');
        // Blog::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data['blog']=Blog::with(['user','category'])
                    ->where('slug',$slug)
                    ->first();
        if(empty($data['blog'])){
            abort(404);
        };
        return view('admin.blog.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data['categories']=Category::status()->get();
        $data['blog']=Blog::with(['user','category'])
                    ->where('slug',$slug)
                    ->first();
        if(empty($data['blog'])){
            abort(404);
        };
        return view('admin.blog.update',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
