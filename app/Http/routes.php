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

//触发事件的路由
/*Route::get('/',function (){
    $user=\App\User::find(1);
    event(new \App\Events\UserSignUp($user));
})*/;

Route::get('/','SitesController@index' );
Route::get('/sites', 'SitesController@about');
Route::get('/errors','SitesController@errors');
//下列路由都是在articlesController中实现的，如果嫌麻烦可以使用
Route::resource('/articles','articlesController');
Route::get('/articles/{id}/delete','articlesController@destroy');
Route::get('tag/{id}','TagController@index');
//但是这个方法有个硬性规定就是，你要去的路由要和方法名字一致
//Route::get('/articles','articlesController@index');
//Route::get('/articles/create','articlesController@create');
//注意这里一个很有趣的现象，如果跟下面携带id的路由方法顺序调转的话，在运行时会把
//create这个视为变量并赋给id，然后执行的是show方法而不是create方法
//Route::get('/articles/{id}','articlesController@show');
//Route::post('/articles','articlesController@store');

//Route::get('/articles/{id}/edit','articlesController@edit');
//Route::PATCH('/articles/{id}','articlesController@Update');
//Auth::LoginUsingId(2);
//Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
//    Route::get('/users',function (){
//        return 'admin only';
//    });
//});

//用户登录的路由
Route::auth();

Route::get('/home', 'HomeController@index');
