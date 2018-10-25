<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function Upload($file,$path)
    {
        if ($file!="") {
            $filename = time() . "-" . $file->getClientOriginalName();
            $path1 = public_path($path);
            $file->move($path1, $filename);
            return $path . $filename;
        }
    }
}
