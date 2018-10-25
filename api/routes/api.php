<?php
$router->group(['prefix'=>'api/v1','namespace'=>'v1'],function() use($router){
    $router->get('/categories','CategoryController@index');
    $router->get('/articles/{id}','ArticleController@index');
    $router->get('/detail/{id}','ArticleController@detail');
    $router->get('/settings','SettingController@index');
});