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

Route::get('/', function () {
    return view('welcome');
});

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
});












