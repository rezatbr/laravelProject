<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;


class SettingsController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     * @param Setting $setting
     * @return \Illuminate\Http\Response
     * @internal param Article $article
     * @internal param int $id
     */
    public function edit(Setting $setting)
    {
        return view('Admin.settings.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Setting $setting
     * @return \Illuminate\Http\Response
     * @internal param Article $article
     * @internal param int $id
     */
    public function update(Request $request,Setting $setting)
    {
        $data=$request->all();
        $setting->update($data);
        return redirect('/home')->with('status', 'reteurn massage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     * @internal param Article $artiQcle
     * @internal param int $id
     */
    public function destroy(Article $article)
    {


    }
}
