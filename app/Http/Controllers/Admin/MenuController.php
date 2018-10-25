<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index()
    {
        $menus=Menu::where('parent_id','0')->orderBy('priority','asc')->get();
        return view('Admin.menu.list',compact('menus'));
    }
    public function create()
    {
        $menus=Menu::where('parent_id',0)->get();
        return view('Admin.menu.add',compact('menus'));
    }

    public function edit(Menu $menu)
    {
        $menus=Menu::where('parent_id',0)->where('id','!=',$menu->id)->get();
        return view('Admin.menu.edit',compact('menu','menus'));
    }

    public function update(Request $request,Menu $menu)
    {
        $data=array();
        $data['name']=$request->name;
        $data['link']=$request->link;
        $data['parent_id']=$request->parent;
        $menu->update($data);
        return redirect(route('menu.index'))->with('status', 'reteurn massage');

    }

    public function store(Request $request)
    {
        Menu::create([
            'name'=>$request->name,
            'link'=>$request->link,
            'parent_id'=>$request->parent,
            'priority'=>0,
            'status'=>1
        ]);
        return redirect(route('menu.index'))->with('status', 'reteurn massage');
    }
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect(route('menu.index'))->with('status', 'reteurn massage');
    }
}
