<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;
use Crypt;
use DB;

class LoginController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('home.login.login');
    }
    public function register()
    {
        return view('home.login.register');
    }
    // 前台验证码
    public function code(Request $request)
    {
        $input = $request->all();
        $phone = $input['phone'];
        $config = [
            'accessKeyId'    => 'LTAIZX4nsRNBnp24',
            'accessKeySecret' => '8zZGaDlDVNX8DPpVWmRvcx0p5b6S66',
        ];
        $client  = new Client($config);
        $sendSms = new SendSms;
        $code = rand(100000, 999999);
        $sendSms->setPhoneNumbers($phone);
        $sendSms->setSignName('郑Selfmade');
        $sendSms->setTemplateCode('SMS_105505009');
        $sendSms->setTemplateParam(['code' => $code]);
        $client->execute($sendSms);
//        $code = session('code',$code);
        session(['code'=>$code]);
        return 'ok';
    }
    // 前台注册
    public function doRegister(Request $request)
    {
        $code = session('code');
        $data = $request->all();
//        dd($code);
        $tel = DB::table('users')->where('tel', $data['tel'])->first();
//        dd($tel);
        if($tel == null){
//            dd($data);
            if($data['sms_code'] != $code){
                return redirect('home/register')->with('msg','验证码不正确');
            }
            //去除token
            $data = $request->except('sms_code','_token');
            //密码加密
            $data['password'] = Crypt::encrypt($data['password']);
//        dd($data);
            session()->pull('code');
            //执行添加并且得到id
            $id = DB::table('users')->insertGetId($data);
            //如果有id说明添加成功
            if($id > 0){
                //跳转到/types路由，携带一个闪存
                return view('home/login')->with('msg','注册成功，请完善个人信息');
            }
        }else{
            return redirect('home/login')->with('msg','用户已注册，请登录');
        }
    }
    // 前台登录
    public function doLogin(Request $request)
    {
       // dd($request->all());
        $data = $request->except('_token');
        $tel = DB::table('users')->where('tel', $data['tel'])->first();
       // dd($tel);
        if($tel == null){
            return redirect('home/register')->with('msg','无此用户，请先注册');
        }else{
//            密码解密
            $pass = Crypt::decrypt($tel->password);
           // dd($data['password']);
            if ($data['password'] !== $pass) {
                return redirect('home/login')->with('msg','密码不正确');
            }
            session(['tel'=>$tel]);
            return redirect('home/index');
            // echo 124;
        }
    }
    // 重置密码页
    public function doPass()
    {
        return view('home.login.pass');
    }

    public function resetPass(Request $request)
    {
        $code = session('code');
        $data = $request->all();
//        dd($code);
        $tel = DB::table('users')->where('tel', $data['tel'])->first();
//        dd($tel);
        if($tel !== null){
//            dd($data);
            if($data['sms_code'] != $code){
                return redirect('home/dopass')->with('msg','验证码不正确');
            }
            //去除token
            $data = $request->except('sms_code','_token');
            //密码加密
            $data['password'] = Crypt::encrypt($data['password']);
//          dd($data);
//            删除session里code
            session()->pull('code');
            //执行添加并且得到id
            $res = DB::table('users')->where('tel', $data['tel'])->update($data);
            //如果有res说明添加成功
            if($res > 0){
                //跳转到/types路由，携带一个闪存
                return redirect('home/login')->with('msg','重置成功，请登录');
            }
        }else{
            return redirect('home/register')->with('msg','用户未注册，请先注册');
        }
    }

    // 退出登录
    public function doLogout(Request $request)
    {
        $request->session()->pull('tel');
        return redirect('home/login');
    }
}
