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
    return view('admin.index');
});

//后台登录
Route::get('admin/login', 'Admin\LoginController@index');
Route::post('admin/doLogin', 'Admin\LoginController@doLogin');
Route::get('admin/logout', 'Admin\LoginController@doLogout');

// 后台路由群组
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware' => ['isLogin']], function (){

	// 后台首页路由
	Route::get('index','IndexController@index');
    // 用户模块
    Route::get('user', 'UserController@index');
    // 搜索路由
    Route::get('user/index', 'UserController@index');
    // 用户删除
    Route::get('users', 'UserController@destroy');
	// 用户编辑
	Route::get('user/{id}/edit', 'UserController@edit');
	// 用户编辑后提交
	// Route::post('user','UserController@update');

	// Route::post('user/add', 'UserController@add');


	//文章模块
	Route::resource('article','ArticleController');
	//文件上传路由
    Route::post('upload','ArticleController@upLoad');
	//文章编辑页面
	//Route::get('article/wzbj','ArticleController');
	
	//栏目模块
	Route::resource('subject','SubjectController');
	//评论模块 
	Route::resource('comment','CommentController');
	//友情链接
	Route::resource('links','LinksController');
	// 网站配置
    Route::resource('config','ConfigController');
    // 网站配置修改
    Route::post('config/{id}','ConfigController@update');
    // 修改路由
    Route::post('config/changecontent','ConfigController@changeContent');
	// 写入配置
    Route::get('putfile','ConfigController@putFile');
    // 回收站
	Route::resource('recovery','RecController');
  //广告管理
	Route::resource('advert','AdvertisingController');
	
});

	//前台登录
	Route::get('home/login','Home\LoginController@login');
	//注册
	Route::get('home/register','Home\LoginController@register');
	//获取验证码
	Route::get('home/code','Home\LoginController@code');
	//注册判断
	Route::post('home/doregister','Home\LoginController@doRegister');
	//登录判断
	Route::post('home/dologin','Home\LoginController@doLogin');
	//重置密码页
	Route::get('home/dopass','Home\LoginController@doPass');
	//重置密码页
	Route::post('home/resetpass','Home\LoginController@resetPass');
	//退出
	Route::get('home/loginout','Home\LoginController@doLogout');


	// 前台首页
	Route::get('/home/index','Home\IndexController@index');
	// 前台搜索
	Route::get('/home/search','Home\IndexController@search');
	//前台列表页
	Route::get('/article','Home\IndexController@list');
	Route::get('/article/{id}','Home\IndexController@article');

	// 前台个人中心--个人资料
	Route::get('home/user','Home\UserController@index');
	Route::post('home/douser/{uid}','Home\UserController@doUser');
	//             --密码修改
	// Route::get('home/user/password','Home\UserController@doPwd');
	//             --我的文章
	// Route::get('home/user/article','Home\UserController@article');
	//             --我的评论
	// Route::get('home/user/comment','Home\UserController@comment');

	//前台列表页路由
	Route::resource('home/article','Home\ArticleController');
	// Route::get('home/article/{id}','Home\ArticleController@details');
	Route::get('home/details/{id}','Home\ArticleController@details');

// 前台群组路由   @张彦写的
Route::group(['prefix'=>'home','namespace'=>'Home'], function (){

	//详情
	// Route::get('details/{id}','DetailsController@show');
	Route::post('comment/{id}','DetailsController@show');


	//编辑
	Route::get('edit','EditController@create');
	Route::post('add','EditController@store');


});

