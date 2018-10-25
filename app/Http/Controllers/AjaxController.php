<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Menu;
use App\Slider;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function post_status(Request $request){
    $post_status=intval($request->status);
        if ($post_status==1){
            $data=[
                "status"=>0
            ];
            $response=0;
        }else{
            $data=[
                "status"=>1
            ];
            $response=1;

        }
        if ($request->role=='article'){
            Article::find($request->id)->update($data);
        }
        if ($request->role=='slider'){
            Slider::find($request->id)->update($data);
        }
        if ($request->role=='menu'){
            Menu::find($request->id)->update($data);
        }
        return response()->json(array('success'=>true,'value'=>$response));
    }

    public function post_priority(Request $request)
    {
        $priority=intval($request->priority);
        $data=[
            'priority'=>$priority
        ];
        $response=$request->priority;
        Article::find($request->id)->update($data);
        return response()->json(array('success'=>true,'value'=>$response));
    }

    public function post_cat(Request $request)
    {
        $new_cat=Category::create([
            'title'=>$request['title'],
            'description'=>$request['description']
        ]);
        return response()->json(array('success'=>true,'value'=>$new_cat->id,'title'=>$new_cat->title));
    }

    public function sortablemenu(Request $request){

        $m=str_replace('menu[]=','',$request->serial);
        $menu=explode('&',$m);
//        return var_dump($menu);
        for ($i = 0; $i < count($menu); $i++) {

            $name = $i;
            $id = $menu[$i];
            $update = [
                "priority" => $name
            ];

            Menu::find($id)->update($update);
        }

        $menus=Menu::where('parent_id','0')->orderBy('priority','asc')->get();
        $v=view('Admin.menu.ajax',compact('menus'))->render();
        return response()->json(array('success'=>true,'view'=>$v));

    }

}
