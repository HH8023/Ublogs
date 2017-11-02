<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\DB;
use DB;

class LoginController extends Controller
{
    
    public function index()
    {
        //返回登录页面
        return view('Admin.login.login');
        
    }

    public function doLogin(Request $request)
    {
    	$req = $request->all();

    	$admin = DB::table('admin')->where('aname', $req['aname'])->first();
    	 // 查到了就是个对象，没查到就是null
    	 // dd($admin->apwd,$req['apwd']);
    	 // 先判断是否有这个管理员
//    	dd($admin);
    	if ($admin == null) {
    		// 没有该管理员
    		return 1;
    	} else {
    	 	// 判断输入密码是否正确
    		if ($req['apwd'] == $admin->apwd) {
    			session_start();
    			$request->session()->put('admin', $req['aname']);
                return redirect('admin/index');
    		} else {
    			return 1;
    		}
    	}
    }

    public function doLogout(Request $request)
    {
    	$request->session()->pull('admin');
    	return redirect('admin/login');
    }
}
