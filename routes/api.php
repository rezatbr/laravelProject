<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/v1')->namespace('Api\v1')->group(function(){
    Route::get('/categories','CategoryController@index');
    Route::get('/products','CategoryController@index');
    Route::get('/settings','SettingController@index');
    Route::get('/articles/{category}','ArticleController@index');
    Route::get('/detail/{article}','ArticleController@details');
    Route::post('/user','UserController@index');
    Route::get('/user/{api_token}','UserController@user');
});
Route::get('/products','Test_apiController@categories');
Route::get('/articles/{id}','Test_apiController@articles');
Route::get('/detail/{id}','Test_apiController@details');
