<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        $subject = DB::table('subject')->get();
        $advert = DB::table('advert')->get();
        // dd($subject);
        // session(['tel'=>'12345']);
        // $tel = session()->pull('tel');
        // dd($tel);
        $user = DB::table('user_infos')
        ->join('artical_list','user_infos.uid','=','artical_list.user_id')
        ->select('user_infos.nickname','user_infos.u_photo','artical_list.title','artical_list.add_time','artical_list.photo','artical_list.id')->get();
        // dd($user);
         // $rtical_list = DB::table('artical_list')->get();
         $artical_detail = DB::table('artical_detail')->get();
        $users =  session()->get('tel');
        $uid = $users->uid;
        $users = DB::table('user_infos')->where('uid',$uid)->first();
        // dd($users);
        return view('home.index',compact('users','user','artical_detail','configs','links','subject','advert'));
    }

    /**
     * Show the form for creating a new resource.
     *  列表页对应的控制器方法
     * @return \Illuminate\Http\Response
     */
    public function search(request $request)
    {
        $configs = DB::table('configs')->get();
        $links = DB::table('links')->get();
        $advert = DB::table('advert')->get();
        $input = $request->input('keywords')?$request->input('keywords'):'s';
        $artical_list = DB::table('artical_list')->where('title','like','%'.$input.'%')
        ->join('artical_detail','artical_list.id','=','artical_detail.art_id')
        ->select('artical_list.title','artical_list.add_time','artical_list.photo','artical_list.id','artical_detail.art_synopsis','artical_list.user_id')->get();
        // dd($artical_list);
        $user_infos = DB::table('user_infos')->get();
        return view('home.search',compact('artical_list','artical_detail','configs','user_infos','links','advert'));
    }

    /**
     * Store a newly created resource in storage.
     *  详情页对应的控制器方法
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function article($id)
    {
        //
        // echo 3333111111;
    }

   
}
