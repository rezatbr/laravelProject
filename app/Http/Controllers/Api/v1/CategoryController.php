<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CategoryResource;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
//        dd("jjj");
        $cats=Category::all();
        return  CategoryResource::collection($cats);
    }
    
}
