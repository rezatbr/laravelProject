<?php

namespace App\Http\Controllers\v1;
use App\Http\Controllers\Controller;
use App\Setting;
use App\Http\Resources\v1\SettingResource;

class SettingController extends Controller
{
    public function index()
    {
        $settings=Setting::all();
        return SettingResource::collection($settings);
    }
}
