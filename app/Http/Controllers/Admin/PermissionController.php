<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class PermissionController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $permissions=Permission::paginate(5);
        return view('Admin.permission.list',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Admin.permission.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
      Permission::create([
          'name'=>$request['en_name'],
          'title'=>$request['fa_name']
      ]);
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return Response
     */
    public function edit(Permission $permission)
    {
        return view('Admin.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permission
     * @return Response
     */
    public function update(Request $request, Permission $permission)
    {
        $data=$request->all();
        $permission->update($data);
        return redirect(route('permission.index'))->with('status', 'reteurn massage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return Response
     */
    public function destroy(Permission $permission)
    {
      $permission->delete();
//        unlink($article->image);
      return redirect(route('permission.index'))->with('status', 'reteurn massage');
    }
    public function ajaxList(){
        $permissions=Permission::paginate(5);
        return view('Admin.permission.ajax',compact('permissions'));
    }
}
