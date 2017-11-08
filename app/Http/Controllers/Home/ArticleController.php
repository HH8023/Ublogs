<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Artcal_list;
use App\Http\Models\Artcal_detail;
use App\Http\Models\Subject;
use App\Http\Models\UserInfo;
use App\Http\Models\Attentions;
use App\Http\Controllers\Controller;
use DB;

class ArticleController extends Controller
{   
    public function details($id)
    {   
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        // dd($links);
        //从栏目的id绑定文章的id
        $art = Artcal_list::where('id',$id)->get();
        //获取文章内容表遍历到页面
        $det= Artcal_detail::where('art_id',$id)->get();
        //获取用户的信息
        $uid = UserInfo::get();
        // //用户关注表
        // dd($uid);
        // $att = Attentions::get();
        $users =  session()->get('tel');
        if($users != null){
            $id = $users->uid;
            $users = DB::table('user_infos')->where('uid',$id)->first();
        }
        // return view('home.details',['art' => $art,'det'=>$det,'configs'=>$configs,'links'=>$links,'users'=>$users],['uid'=>$uid]);
        return view('home.details',compact('users','configs','links','art','det','uid'));

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        $users =  session()->get('tel');
        if($users != null){
            $uid = $users->uid;
            $users = DB::table('user_infos')->where('uid',$uid)->first();
        }
         //查找栏目的id
        $pro = Subject::where('id',$id)->first();
        //从栏目的id绑定文章的id
        $title = Artcal_list::orderBy('id','desc')->where('pro_id',$pro->id)->where('status', 0)->get();
        //获取文章内容表遍历到页面
        $aid= Artcal_detail::get();
        //获取用户的信息
        // dd($aid);
        $uid = UserInfo::get();
        // //用户关注表
        
        // $att = Attentions::get();

        return view('home.article',['title' => $title,'aid'=>$aid, 'pro'=>$pro,'uid' => $uid,'configs'=>$configs,'links'=>$links,'users'=>$users]);
    }


}
