<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api_user extends Model
{
    protected $fillable=[
        'phone','api_token','code','code2'
    ];
}
