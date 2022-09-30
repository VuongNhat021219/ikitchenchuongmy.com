<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BlogsRequest;
use Illuminate\Support\Str;
use App\Models\blog_models;
use App\Http\Requests\EditBlogRequest;

class BlogAdminController extends Controller
{
    protected $blog;
    public function __construct()
    {
        $this->blog = new blog_models(); 
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = $this->blog->orderByDesc('id')->cursorPaginate(5);
        
        return view('admin.pages.blog',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.blogs.addBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogsRequest $request)
    {
        if($request->hasfile('image'))
        {
            $nameImage=$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path().'/uploads/images/', $nameImage); 
        }
          //lưu vào database
       $this->blog->title = $request->title;
       $this->blog->content = $request->content;
       $this->blog->danhmucbaiviet = $request->radio;
       $this->blog->image = $nameImage;
       
       $this->blog->title_sub = $request->title_sub;
       $this->blog->slug = Str::of($request->title)->slug('-');
        
       $this->blog->save();

       return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = $this->blog->find($id);
        return view('admin.layouts.blogs.editBlog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBlogRequest $request, $id)
    {
        $blog = $this->blog->find($id);

        //upload 1 ảnh
        if($request->hasfile('image'))
        {
            $nameImage=$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path().'/uploads/images/', $nameImage); 
        }else{
           $nameImage= $blog->image;
        }

         //lưu vào database
       $blog->title = $request->title;
       $blog->content = $request->content;
       $blog->image = $nameImage;
       $blog->title_sub = $request->title_sub;
       $blog->slug = Str::of($request->title)->slug('-');
       $blog->danhmucbaiviet = $request->radio;
        $blog->save();
       return redirect()->route('blog.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = $this->blog->find($id);
        $blog->delete();
        return redirect()->back();
    }
}
