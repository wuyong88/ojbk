<?php

namespace App\Http\Controllers\Fl;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $Request){
    	return view('index');
    }
    public function index(Request $Request){
    	$method = $Request->method();
		if ($Request->isMethod('post')) {
	    	//查库
	        $data_db=DB::select('select * from tp_admin where id = ?', [1]);
	        $data_db=json_decode(json_encode($data_db),true);

	    	$data = $Request->all();
	    	// var_dump($data_db);die;

	    	//修改增加
			$username=Redis::SET("username",$data['username']);
	        $pwd=Redis::SET("pwd",$data['password']);

			//查看
			$username=Redis::GET("username");
	        $pwd=md5(Redis::GET("pwd"));
		   
			if ($data_db[0]['user_name']!==$username || $data_db[0]['password']!==$pwd) {
                echo '<script>alert("登录失败");window.location.href="index.php";</script>';
            }
            return view('loginout');
		}
		return redirect('/login');
    }
    public function loginout(Request $Request){
		Redis::DEL("username","pwd");
    	return redirect('/login');
    }
}
