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

<<<<<<< HEAD
// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('/', function () {
    return view('/login', ['name' => 'James']);
    // return view('LoginOut', ['name' => 'James']);
});


// Route::get()
// Route:any
Route::any('/login','Wy\LoginConsole@login');    
 //登录页面
Route::any('wy/index/{username?}/{password?}','Wy\LoginConsole@index');

 //登录退出
Route::any('wy/loginOut','Wy\LoginConsole@loginOut');
// Route::any('/Wy/login/{id?}/{lal?}','Wy\LoginConsole@index');
=======
Route::get('/', function () {
    return view('index');
});
//登陆页面
Route::any('/login','Fl\LoginController@login');
//处理数据
Route::any('/index/{username?}/{password?}','Fl\LoginController@index');
//退出页面
Route::any('/fl/loginout/','Fl\LoginController@loginout');
>>>>>>> 2cfe9ad0323f08c97415f4be8cc92293f5298885
