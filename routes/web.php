<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::view('/','welcome');

Auth::routes();
Route::get('/home', 'HomeController@index');

//Ajax pagination routes
Route::get('/getListArticle', 'Admin\ArticleController@ajaxList');

Route::get('/getListCategory', 'Admin\CategoryController@ajaxList');

Route::get('/getListPermission', 'Admin\PermissionController@ajaxList');

Route::get('/getListSlider', 'Admin\SliderController@ajaxList');
//end Ajax pagination routs

//Ajax routes
Route::post('/status','AjaxController@post_status');

Route::post('/priority','AjaxController@post_priority');

Route::post('/create_cat','AjaxController@post_cat');

Route::post('/sortablemenu','AjaxController@sortablemenu');
//end Ajax routes


Route::get('/test', 'Admin\UserController@test');

Route::get('/code', 'Admin\CodeController@index')->name('code.index');

Route::get('/code/generate', 'Admin\CodeController@store')->name('code.generate');

Route::view('/Admin/user/page', 'Admin/user/page');

Route::get('/Admin/user/page2/show_update', 'Admin\UserController@show_update');

Route::post('/Admin/user/page', 'Admin\UserController@check_ch');

Route::patch('/Admin/user/page2/{user}', 'Admin\UserController@update_ch');



Route::group(['namespace'=>'Admin','middleware'=>'auth','prefix'=>'Admin'],function (){
    $this->resource('/article','ArticleController');

    $this->resource('/category','CategoryController');

    $this->resource('/slider','SliderController');

    $this->resource('/permission','PermissionController');

    $this->resource('/role','RoleController');

    $this->resource('/user','UserController');

    $this->resource('/setting','SettingsController');

    $this->resource('/menu','MenuController');


//    $this->resource('/info','InfoController');
});


