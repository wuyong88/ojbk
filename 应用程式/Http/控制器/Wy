<?php

namespace App\Http\Controllers\Wy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class LoginConsole extends Controller
{
	// 登录页面方法
    public function login(Request $Request){
    	// var_dump($request);
    	// phpinfo();
    	return view('login'); //传递参数 从web  Route::any('/','Wy\LoginConsole@login');
    }

    public function index(Request $Request){
  //判断post
    	$method = $Request->method();
       
		if ($Request->isMethod('post')) {

		// var_dump($request);
    	// return '123';
    	$data=$Request->all();
    	// var_dump($data);
        //["username"]=>
		// string(12) "187991110855"
		// ["password"]=>
		// string(2) "21"

        // 储存数据
        $username = Redis::SET("username",$data['username']);
        $password = Redis::SET("password",$data['password']);
        // 获取数据
        $username = Redis::GET("username");
        $password = Redis::GET("password");
           // var_dump($username);

        $results = DB::select('select * from tp_user where username =?', [$username]);
           // var_dump($results);
        $results=json_decode(json_encode($results),true);
        // var_dump($results);

        // 判断登录成功与否
        if ($results[0]['username']!==$username || $results[0]['password']!==$password) {
            echo '<script>alert("亲，密码或账号错误了呢！");window.location.href="";</script>';
            }
           // 判断不成立返回
          return view('index');
		}
    	
      return redirect('login');
    
    }

    	// 登录页面方法
    public function loginOut(Request $Request){
        Redis::DEL("username","password");
    	return redirect('login');
    }
}


