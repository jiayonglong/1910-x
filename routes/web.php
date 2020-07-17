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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test/zbc','Test\TestController@zbc');
Route::get('/user/reg','User\IndexController@reg');//注册
Route::post('/user/reg','User\IndexController@regDo');//执行注册
Route::get('/user/login','User\IndexController@login');//登录
Route::post('/user/login','User\IndexController@loginDo');//执行登录
Route::get('/user/center','User\IndexController@center');//个人中心
