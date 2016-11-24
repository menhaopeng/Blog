<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Home\IndexController@index');
Route::get('/cate/{cate_id}', 'Home\IndexController@cate');
Route::get('/a/{art_id}', 'Home\IndexController@art');




Route::any('admin', 'Admin\LoginController@login');
Route::any('admin/login', 'Admin\LoginController@login');
Route::get('admin/code', 'Admin\LoginController@code');

/*
 * 'middleware' => ['web','admin.login']  中间件
 * 'prefix' => 'admin'      前缀
 * 'namespace' => 'Admin'   命名空间
 * */
Route::group(['middleware' => ['web','admin.login'], 'prefix' => 'admin', 'namespace' => 'Admin'],function (){
    Route::get('index', 'IndexController@index');
    Route::get('info', 'IndexController@info');
    Route::get('quit', 'LoginController@quit');
    Route::any('repass', 'IndexController@repass');


    Route::post('cate/changeorder', 'CategoryController@changeOrder');
    Route::resource('category', 'CategoryController');

    Route::resource('article', 'ArticleController');

    //友情链接
    Route::resource('links', 'LinksController');
    Route::post('link/changeorder', 'LinksController@changeOrder');

    //自定义导航
    Route::resource('navs', 'NavsController');
    Route::post('nav/changeorder', 'NavsController@changeOrder');

    //配置项
    Route::resource('config', 'ConfigController');
    Route::post('conf/changeorder', 'ConfigController@changeOrder');
    Route::post('conf/changecontent', 'ConfigController@changeContent');
    Route::get('conf/putfile', 'ConfigController@putFile');

    //上传图片
    Route::any('upload', 'CommonController@upload');
});












