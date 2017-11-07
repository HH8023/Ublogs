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

class ArticleController extends Controller
{   
    public function details($id)
    {   

        //从栏目的id绑定文章的id
        $art = Artcal_list::where('id',$id)->get();
        //获取文章内容表遍历到页面
        $det= Artcal_detail::where('art_id',$id)->get();
        //获取用户的信息
        $uid = UserInfo::get();
        // //用户关注表
        
        // $att = Attentions::get();

        return view('home.details',['art' => $art,'det'=>$det,'uid' => $uid]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        
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

        return view('home.article',['title' => $title,'aid'=>$aid, 'pro'=>$pro,'uid' => $uid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
