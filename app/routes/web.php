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
// Route::get('/login',function(){
// 	return 'login page';
// });
// Route::group([],function(){
	Route::get('/', function () {
	    return view('welcome');
	});


// 	//更新
// 	Route::get('/updata',function(){
// 		echo "啊啊啊";
// 	});
// 	//删除
// 	Route::get('/lalal',function(){
		
// 	})->middleware('login');
// 	Route::get('/user/{id}',function($id){
// 		echo '用户id为'.$id;
// 	})->where('id','\d+');
// 	Route::get('/admdadadin',function(){
// 		return '这是个后台页面';
// 	})->name('admin');

// 	Route::get('/home',function(){
// 		return '<a href="'.route('admin').'">后台</a>';
// 	});
// 	Route::get('/404',function(){
// 		if(empty($_GET['id'])){
// 			abort(404);
// 		}
// 	});
// });

Route::get('/user/add','UserController@add');
Route::post('/user/insert','UserController@insert');
Route::get('/user/{id}','UserController@show')->name('user.show');
Route::get('/test',function(){
	echo route('user.show',['id'=>100]);
});
Route::get('/users','UserController@index')->middleware('login');

//资源控制器 
Route::resource('tiezi','TieziController');
Route::get('/request','TieziController@request');
Route::get('from','TieziController@from');
Route::post('upload','TieziController@upload');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//设置cookie
Route::get('/cookie','HomeController@set');
//设置闪存
Route::get('/flash','HomeController@false');
Route::get('/get-flash','HomeController@getflash');
Route::get('/userss','HomeController@haha');
Route::post('/userwss','HomeController@insert');

//响应
Route::get('/response','HomeController@resposnse');

Route::get('/shitu','HomeController@shitua');
Route::get('/page-1','HomeController@page1');
Route::get('/page-2','HomeController@page2');

//循环  控制
//
Route::get('/control','HomeController@contre');

Route::get('/select','DBController@select');
Route::get('/shiwu','DBController@trans');
Route::get('/cheshi','DBController@ceshi');

//jion 使用
Route::get('/join','DBController@join');
