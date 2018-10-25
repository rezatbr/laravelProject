<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
class Test_apiController extends Controller{
    //get all records from categories table
    public function categories()
    {
        $cats=Category::select('id','title','description','image')->get();
        if (count($cats)<1){
            $response['StatusCode']=1;
            $response['Message']="موردی یافت نشد";
        }else{
            $response['StatusCode']=0;
            $response['Message']="با موفقیت انجام شد";
            $response['Data']=$cats;
        }
        return response()->json($response);
    }
    //get all records of articles table by category posted id
    public function articles($id)
    {
        $category=Category::find($id);
        if (!$category){
            $response['StatusCode']=2;
            $response['Message']="این شناسه در دیتابیس وجود ندارد";}
        else{
                $articles = $category->articles()->where('status',1)->orderBy('priority','desc')->get();
                if (count($articles) < 1) {
                    $response['StatusCode'] = 1;
                    $response['Message'] = "موردی یافت نشد";
                } else {
                    $response['StatusCode'] = 0;
                    $response['Message'] = "با موفقیت انجام شد";
                    $response['Data'] = $articles;
                }
            }
        return response()->json($response);
    }
    //get a records of articles table by posted id
    public function details($id)
    {
        $article=Article::where('status',1)->find($id);
        if (!$article){
            $response['StatusCode']=1;
            $response['Message']="موردی یافت نشد";
        }else{
            $response['StatusCode']=0;
            $response['Message']="با موفقیت انجام شد";
            $response['Data']=$article;
        }
        return response()->json($response);
    }
}