<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\Resource;

class CategoryResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'image'=>url('/public'.$this->image),
            'time'=>jDate($this->created_at)->format('datetime')
        ];
    }
    
}

