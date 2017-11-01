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

    // Route::get('/', function ()    {
    //     // 使用 Auth 中间件
    // });
// 'middleware'=>'login'
	// // 用户模块
 //    Route::get('user/profile', 'admin');



	// 后台首页路由
	Route::get('index','IndexController@index');
	// Route::get('info','IndexController@info');

    // 用户模块
    Route::get('user', 'UserController@index');
    Route::get('user/{id}', 'UserController@auth');
	Route::post('user/add', 'UserController@add');


	// 文章模块
	Route::resource('article','ArticleController');














   //评论模块
	Route::get('comment','CommentController@comment');



  //关注模块
	Route::get('follow','FollowController@follow');







  //广告管理
	Route::resource('advert','AdvertisingController');
	


});




Route::group(['prefix'=>'home','namespace'=>'Home'], function (){










//详情
Route::get('datails','DatailsController@index');




});