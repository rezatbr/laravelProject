<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data'=>$this->collection->map(function($item){
                return [
                    'id'=>$item->id,
                    'title'=>$item->title,
                    'description'=>$item->description,
                    'image'=>url('/public'.$item->image),
                ];
            })
        ];
    }

    public function with($request)
    {
        return [
            'status'=>'success'
        ];
    }
}
