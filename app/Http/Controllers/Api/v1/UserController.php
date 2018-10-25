<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Api_user;
use App\Code;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $phone=$request->phone;
        $code=$request->code;

        $validator=Validator::make($request->all(),[
            'phone'=>'required|regex:/^[0][9][0-9][0-9]{8,8}$/',
            'code'=>'required|min:4|max:4'
        ]);
        if ($validator->fails()){
            return response([
                'Status'=>false,
                'StatusCode'=>3,
                'Message'=>'اطلاعات وارد شده صحیح نمی باشد',
                'data'=>[
                    $validator->errors()
                ]
            ]);
        }
        $validCode=Code::where(['status'=>0,'code'=>$code])->get();
        $validCode2=Code::where(['status'=>1,'code'=>$code])->get();
        $validCode3=Code::where(['code'=>$code])->get();
        $exists_user=Api_user::where(['phone'=>$phone])->get();
        //if every things is ok
        if (count($validCode)==1 && count($exists_user)==0){
            $user=Api_user::create([
                'phone'=>$phone,
                'code'=>$code,
                'api_token'=>str_random(50)
            ]);
            Code::where(['code'=>$code,'status'=>0])->update(['status'=>1,'user'=>$phone]);
            return response()->json([
                'Status'=>true,
                'StatusCode'=>1,
                'Message'=>'عملیات احراز هویت با موفقیت انجام شد',
                'data'=>$user
            ]);
        }
        //if user exists
        else if(count($exists_user)!=0){
            return response()->json([
                'Status'=>false,
                'StatusCode'=>0,
                'Message'=>'این کاربر قبلا ثبت شده است',
            ]);
        }
        //if code used by another user
        else if(count($validCode2)==1){
            return response()->json([
                'Status'=>false,
                'StatusCode'=>0,
                'Message'=>'این کد قبلا استفاده شده است',
            ]);
        }
        //if code doesn't exists
        else if(count($validCode3)==0){
            return response()->json([
                'Status'=>false,
                'StatusCode'=>0,
                'Message'=>'کد وارد شده موجود نمیباشد',
            ]);
        }
        else {
            return response()->json([
                'Status'=>false,
                'StatusCode'=>0,
                'Message'=>'اطلاعات وارد شده صحیح نیست',
            ]);
        }
    }

    public function user($api_token)
    {
        $user=Api_user::where(['api_token'=>$api_token])->get();
        if (count($user)==1){
            return response()->json([
                'Status'=>true,
                'StatusCode'=>1,
                'Message'=>'توکن معتبر است',
                'data'=>$user
            ]);
        }
        return response()->json([
            'Status'=>false,
            'StatusCode'=>0,
            'Message'=>'توکن نامعتبر است',
        ]);
    }
}
