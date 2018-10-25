<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\Resource;

class SettingResource extends Resource
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
            'address'=>$this->address,
            'phone'=>$this->phone,
            'about_us'=>$this->about_us,
            'email'=>$this->email
        ];
    }
}
