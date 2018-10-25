<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;


class ArticleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('list_article')) {
            $articles = Article::orderBy('priority', 'DESC')->paginate(3);
            return view('Admin.article.list', compact('articles'));
        } else {
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
        if (Gate::allows('add_article')) {
            $categories = Category::all();
            return view('Admin.article.add', compact('categories'));
        } else {
            return redirect('/home')->with('error', 'شما مجاز به دسترسی به این صفحه نیستید');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request['image'];
        $pic = $this->Upload($file, '/uploads/articles/');
        $article = Article::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'image' => $pic,
            'color' => $request['color']
        ]);
        $article->categories()->attach(request('cat'));
        // Session::flash('status','fffff');
        return redirect(route('article.index'))->with('status', 'reteurn massage');

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
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Article $article)
    {
        if (Gate::allows('edit_article')) {
            $categories = Category::all();
            return view('Admin.article.edit', compact('article', 'categories'));
        }else {
            return redirect('/home')->with('error', 'شما مجاز به دسترسی به این صفحه نیستید');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Article $article
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Article $article)
    {
//        var_dump(count($request->cat));die;
        if ($request['image']) {
            $file = $request['image'];
            if($article->image){
                unlink('public'.$article->image);
            }
            $img = $this->Upload($file, '/uploads/articles/');
        } else {
            $img = $article['image'];
        }
//        $data=$request->all();
        $data = array();
        $data['image'] = $img;
        $data['title'] = $request['title'];
        $data['description'] = $request['description'];
        $data['color'] = $request['color'];
        $article->update($data);
//        $category_id[]= $request->cat;
        $article->categories()->sync($request->cat);
        return redirect(route('article.index'))->with('status', 'reteurn massage');
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
        if (Gate::allows('edit_article')) {
        $article->delete();
        if (!empty($article->image)) {
            unlink('public' . $article->image);
        }
        return redirect(route('article.index'))->with('status', 'reteurn massage');}
        else {
            return redirect('/home')->with('error', 'شما مجاز به دسترسی به این صفحه نیستید');
        }

    }
    public function ajaxList(){
        $articles=Article::orderBy('priority', 'DESC')->paginate(3);
        return view('Admin.article.ajax',compact('articles'));
    }
}
