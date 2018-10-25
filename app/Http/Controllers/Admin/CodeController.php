<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Code;

class CodeController extends Controller
{
    public function index()
    {
        $codes=Code::orderBy('created_at', 'desc')->paginate('20');
        return view('Admin.code.list',compact('codes'));
    }

    public function store()
    {
        for($i=0;$i<20;$i++){
        Code::create([
            'code'=>str_random(4),
            'status'=>0
        ]);}
        return back()->with('status', 'reteurn massage');
    }
}
