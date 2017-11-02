<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 后台路由群组
Route::group(['prefix'=>'admin','namespace'=>'Admin'], function (){

 
	// 后台首页路由
	Route::get('index','IndexController@index');
	// Route::get('info','IndexController@info');

    // 用户模块
    Route::get('user', 'UserController@index');
    Route::get('user/{id}', 'UserController@auth');
	Route::post('user/add', 'UserController@add');


	//文章模块
	Route::resource('article','ArticleController');
	//图片列表页显示
	Route::get('particle','ArticleController@plist');
	//文件上传路由
    Route::post('upload','ArticleController@upLoad');
	//文章编辑页面
	//Route::get('article/wzbj','ArticleController');

    // 回收站
	Route::resource('recovery','RecController');







});

