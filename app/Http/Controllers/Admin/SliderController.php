<?php

namespace App\Http\Controllers\Admin;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class SliderController extends AdminController
{
    public function index()
    {
        if (Gate::allows('list_slider')) {
        $sliders=Slider::paginate(2);
        return view('Admin.slider.list',compact('sliders'));}
        else {
            return redirect('/home')->with('error', 'شما مجاز به دسترسی به این صفحه نیستید');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::allows('add_slider')) {
        return view('Admin.slider.add');}
        else {
            return redirect('/home')->with('error', 'شما مجاز به دسترسی به این صفحه نیستید');
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
        $file=$request['image'];
        $pic=$this->Upload($file,'/uploads/sliders/');
        Slider::create([
            'title'=>$request['title'],
            'image'=>$pic
        ]);
        return redirect(route('slider.index'))->with('status', 'reteurn massage');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Slider $slider
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Slider $slider)
    {
        if (Gate::allows('edit_slider')) {
        return view('Admin.slider.edit',compact('slider'));}
        else {
            return redirect('/home')->with('error', 'شما مجاز به دسترسی به این صفحه نیستید');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Slider $slider
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Slider $slider)
    {
        if ($request['image']){
            $file=$request['image'];
            if($slider->image){
                unlink('public'.$slider->image);
            }
            $img=$this->Upload($file,'/uploads/sliders/');
        }
        else{
            $img=$slider['image'];
        }
        $data=$request->all();
        $data['image']=$img;
        $data['title']=$request['title'];
        $slider->update($data);
        return redirect(route('slider.index'))->with('status', 'reteurn massage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Slider $slider
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Slider $slider)
    {
        if (Gate::allows('delete_slider')) {
        $slider->delete();
            if ($slider->image) {
                unlink('public' . $slider->image);
            }
            return redirect(route('slider.index'))->with('status', 'reteurn massage');}
        else {
            return redirect('/home')->with('error', 'شما مجاز به دسترسی به این صفحه نیستید');
        }
    }
    public function ajaxList(){
        $sliders=Slider::paginate(2);
        return view('Admin.slider.ajax',compact('sliders'));
    }
}
