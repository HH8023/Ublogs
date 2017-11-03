<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Models\Artcal_list;
use App\Http\Models\Artcal_detail;
use App\Http\Models\Subject;
use App\Http\Models\UserInfo;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo 1111;
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *  列表页对应的控制器方法
     * @return \Illuminate\Http\Response
     */
    public function article($id)
    {    

        $pro = Subject::where('id',$id)->first();
        // $pro = DB::table('subject')->where('id', $id)->first();
        $title = Artcal_list::where('pro_id',$pro->id)->get();
       
        $aid= Artcal_detail::get();

        $uid = UserInfo::get();
       

        return view('home.article',['title' => $title,'aid'=>$aid, 'pro'=>$pro,'uid' => $uid]);
    }

    /**
     * Store a newly created resource in storage.
     *  详情页对应的控制器方法
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function list()
    // {
    //     //
    //     $aid= Artcal_detail::get();
    //     $title = Artcal_list::get();
    //     $pro = Subject::get();;
    //     // 查看detail表内容
        
    //     return view('home.article',['title' => $title,'aid'=>$aid, 'pro'=>$pro]);
    // }

   
}
