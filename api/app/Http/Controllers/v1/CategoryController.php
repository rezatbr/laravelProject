<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CategoryResource;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $cats=Category::get();
        return CategoryResource::collection($cats);
    }
}
