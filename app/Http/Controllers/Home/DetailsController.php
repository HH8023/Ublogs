<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class DetailsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        //  echo 111111111;
         $comm = $request->all();
           // dd($comm);
        $user = DB::table('user_infos')
         ->join('artical_list','user_infos.uid','=','artical_list.user_id')
         ->select('user_infos.nickname','user_infos.u_photo','artical_list.title','artical_list.add_time','artical_list.photo','artical_list.id')->first();
          // dd($user);
          
             if($request->has('title')){
            // 获取用户搜索的cid字段的值
            $title = $request->input('title');
            $where['title'] = $title;
            //给查询语句添加上where条件
            $user->where('title', 'like', '%'.$title.'%');
        }

         // 
         $artical_detail = DB::table('artical_detail')->first();
         // dd($artical_detail);
        //添加
         $comment = DB::table('comment')->insertGetId($comm);
         // dd($co);
        //评论
         $comment = DB::table('comment')->get();
         $list = DB::table('artical_list')->get();
        $data = session()->get('tel');
        $uid = $data->uid;

        // dd($uid); 

        $users = DB::table('user_infos')->where('uid',$uid)->first();
         
        return view('home.details',compact('users','user','artical_detail','links','configs')); 

          
       

    }

   
}
