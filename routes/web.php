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