<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class CategoryController extends AdminController
{
    //
    public function index()
    {
        if (Gate::allows('list_cat')) {
        $categories=Category::paginate(2);
        return view('Admin.category.list',compact('categories'));}
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
        if (Gate::allows('add_cat')) {
        return view('Admin.category.add');}
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
        $pic=$this->Upload($file,'/uploads/categories/');
        category::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'image'=>$pic
        ]);
        return redirect(route('category.index'))->with('status', 'reteurn massage');

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
     * @param Category $category
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Category $category)
    {
        if (Gate::allows('edit_cat')) {
        return view('Admin.category.edit',compact('category'));}
        else {
            return redirect('/home')->with('error', 'شما مجاز به دسترسی به این صفحه نیستید');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Category $category
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Category $category)
    {
        if ($request['image']){
            $file=$request['image'];
            if($category->image){
                unlink('public'.$category->image);
            }
            $img=$this->Upload($file,'/uploads/categories/');
        }
        else{
            $img=$category['image'];
        }
        $data=$request->all();
        $data['image']=$img;
        $data['title']=$request['title'];
        $data['description']=$request['description'];
        $category->update($data);
        return redirect(route('category.index'))->with('status', 'reteurn massage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Category $category)
    {
        if (Gate::allows('delete_cat')) {
        $category->delete();
            if ($category->image) {
                unlink('public' . $category->image);
            }
        return redirect(route('category.index'))->with('status', 'reteurn massage');}
        else {
            return redirect('/home')->with('error', 'شما مجاز به دسترسی به این صفحه نیستید');
        }
    }
    public function ajaxList(){
        $categories=Category::paginate(2);
        return view('Admin.category.ajax',compact('categories'));
    }
    
}
