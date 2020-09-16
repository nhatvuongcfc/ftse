<?php

namespace App\Http\Controllers;

use App\Model\Blog;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FrBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
                                    // dd($data); 
        return view('frontend.blog.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function show($slug)
    {
        $data['blog']=Blog::with(['user','category'])
                    ->where('slug',$slug)
                    ->first();
        $category_id=$data['blog']->category_id;            
        $data['popular_blog']=Blog::with(['category','user'])
                                    ->select('*',DB::raw('max(view)'))
                                    ->groupBy('category_id')
                                    ->get(); 
        $data['count_category']=Blog::join('categories', 'categories.id', '=', 'blogs.category_id')
                                    ->select('categories.name as name','categories.slug as slug',DB::raw('count(*) as count'))
                                    ->groupBy('blogs.category_id')
                                    ->get();   
        $data['related_blog']=Blog::with(['category','user'])
                                ->where('category_id',$category_id)
                                ->limit(3)
                                ->get();
                                // dd($data);
        return view('frontend.blog.show',$data);
    }
    public function category($slug){
        $data['category']=Category::where('slug',$slug)->first();
        $category_id=$data['category']->id;
        $data['blogs']=Blog::with(['category','user'])
                        ->where('category_id',$category_id)
                        ->get();
        $data['count_category']=Blog::join('categories', 'categories.id', '=', 'blogs.category_id')
                        ->select('categories.name as name','categories.slug as slug',DB::raw('count(*) as count'))
                        ->groupBy('blogs.category_id')
                        ->get();  
        $data['popular_blog']=Blog::with(['category','user'])
                        ->select('*',DB::raw('max(view)'))
                        ->groupBy('category_id')
                        ->get();                               
        // dd($data);  
        return view('frontend.blog.category',$data);              
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FrBlog  $frBlog
     * @return \Illuminate\Http\Response
     */
    public function edit(FrBlog $frBlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FrBlog  $frBlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrBlog $frBlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FrBlog  $frBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrBlog $frBlog)
    {
        //
    }
}
