<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=[
      'title','description','cat','color','image','status','priority'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
