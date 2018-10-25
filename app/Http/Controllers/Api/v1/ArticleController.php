<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\ArticleResource;
use App\Http\Resources\v1\ArticleCollection;
use App\Http\Resources\v1\DetailResource;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
    public function index(Category $category)
    {
        $articles=$category->articles()->get();
        return new ArticleCollection($articles);
    }

    public function details(Article $article)
    {
        return new DetailResource($article);
    }

}
