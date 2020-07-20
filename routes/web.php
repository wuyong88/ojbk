<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
//登陆页面
Route::any('/login','Fl\LoginController@login');
//处理数据
Route::any('/index/{username?}/{password?}','Fl\LoginController@index');
//退出页面
Route::any('/fl/loginout/','Fl\LoginController@loginout');