<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\ArticleCollection;
use App\Http\Resources\v1\DetailResource;
use App\Article;
use App\Category;


class ArticleController extends Controller
{
    public function index($id)
    {
        $cat=Category::find($id);
        $articles=$cat->articles()->get();
        return new ArticleCollection($articles);
    }

    public function detail($id)
    {
        $article=Article::find($id);
        return new DetailResource($article);
    }

}
