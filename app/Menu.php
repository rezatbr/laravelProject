<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable=[
        'name','status','link','parent_id','priority'
    ];

    public function subs()
    {
        return $this->hasMany('app\Menu','parent_id')->orderBy('priority','ASC');
    }

    public function menu()
    {
        return $this->belongsTo('app\Menu','parent_id');
    }
}
