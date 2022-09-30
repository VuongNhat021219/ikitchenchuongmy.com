<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\SliderModels;
use Illuminate\Http\Request;

class SliderAdminController extends Controller
{
    protected $slider;

    public function __construct()
    {
        $this->slider = new SliderModels();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $slider = $this->slider->orderByDesc('id')->cursorPaginate(5);
        return view('admin.pages.slider',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layouts.slider.addSlider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'thumb' => 'image'
        ]);

        if($request->hasfile('thumb'))
        {
            $nameImage=$request->file('thumb')->getClientOriginalName();
            $request->file('thumb')->move(public_path().'/uploads/images/', $nameImage); 
        }
        $this->slider->name = $request->name;
        $this->slider->name_sub = $request->name_sub;
        $this->slider->url = $request->url;
        $this->slider->thumb = $nameImage;
        $this->slider->active = $request->radio;
        $this->slider->sort_by = $request->sort_by;
        $this->slider->save();
        return redirect()->route('slider.index');

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
        $slider = $this->slider->find($id);
        return view('admin.layouts.slider.editSlider',compact('slider'));
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
        $request->validate([
            'thumb' => 'image',
        ]);
        $slider = $this->slider->find($id);
        if($request->hasfile('thumb'))
        {
            $nameImage=$request->file('thumb')->getClientOriginalName();
            $request->file('thumb')->move(public_path().'/uploads/images/', $nameImage); 
        }else{
            $nameImage= $slider->thumb;
        }
        $slider->name = $request->name;
        $slider->name_sub = $request->name_sub;
        $slider->url = $request->url;
        $slider->thumb = $nameImage;
        $slider->active = $request->radio;
        $slider->sort_by = $request->sort_by;
        $slider->save();
        return redirect()->route('slider.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = $this->slider->find($id);
         $slider->delete();
        return redirect()->back();
    }
}
