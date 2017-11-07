<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 个人信息get
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        $data = session()->get('tel');
        $uid = $data->uid;

        // dd($uid); 

        $users = DB::table('user_infos')->where('uid',$uid)->first();
        // dd($user);
        //dd($users);
        return view('home/user/index',compact('configs','links','users'));
    }

    /**
     * Display the specified resource.
     *  个人信息post
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function doUser(Request $request,$uid)
    {
        // dd($request->get());
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        $data = $request->except('_token');
        // dd($data);
        if($request->hasFile('u_photo')){
            //判断文件是否有效
            if($request->file('u_photo')->isValid()){
               //生成上传文件对象
                $file = $request->file('u_photo');
                //获取后缀名
                $ext = $file->getClientOriginalExtension();
                // dd($ext);
                // // 随机生成新文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                 // 另存为
                $file->move('./upload',$picname);
                if($file->getError()>0){
                    echo '上传失败';
                    die;
                }else{
                    echo '上传成功';
                    
                }
            }
        }
        $data['u_photo'] = $picname;
        $res = DB::table('user_infos')->where('uid',$uid)->update($data);
        // dd($res);
        if($res > 0){
            return redirect('home/user')->with('msg','添加成功');
        }else{
            return redirect('home/user')->with('msg', '修改失败');
        }
        // return redirect('home.index',compact('configs','links'));
        // return redirect('home/index');
        // echo 1234312343232;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function doPwd()
    // {
    //     $configs = DB::table('configs')->get();
    //     $links = DB::table('links')->get();

    //     $data = session()->get('tel');
    //     $uid = $data->uid;

    //     // dd($uid); 

    //     $users = DB::table('user_infos')->where('uid',$uid)->first();
    //     // echo 1234543;
    //     return view('home.user.password',compact('configs','links','users'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function article(Request $request)
    // {
    //     $configs = DB::table('configs')->get();
    //     $links = DB::table('links')->get();
    //     return view('home.user.article',compact('configs','links'));
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function comment(Request $request)
    // {
    //     $configs = DB::table('configs')->get();
    //     $links = DB::table('links')->get();
    //     return view('home.user.comment',compact('configs','links'));
    // }

}
