<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Config;
use App\Http\Controllers\Admin\Links;
use App\Http\Controllers\Admin\Subject;
use App\Http\Controllers\Admin\Advert;
use App\Http\Controllers\Admin\Artical_list;
use App\Http\Controllers\Admin\User;
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

        // session(['tel'=>'12345']);
        // $tel = session()->pull('tel');
        // dd($tel);
        $user = DB::table('user_infos')
        ->join('artical_list','user_infos.uid','=','artical_list.user_id')
        ->select('user_infos.nickname','user_infos.photo','artical_list.title','artical_list.add_time','artical_list.photo','artical_list.id')->get();
         // $rtical_list = DB::table('artical_list')->get();
         $artical_detail = DB::table('artical_detail')->get();
        
        return view('home.index',compact('user','artical_detail','configs','links','subject','advert'));
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
        $input = $request->input('keywords')?$request->input('keywords'):'s';
        $artical_list = DB::table('artical_list')->where('title','like','%'.$input.'%')
        ->join('artical_detail','artical_list.id','=','artical_detail.art_id')
        ->select('artical_list.title','artical_list.add_time','artical_list.photo','artical_list.id','artical_detail.art_synopsis','artical_list.user_id')->get();
        // dd($artical_list);
        $user_infos = DB::table('user_infos')->get();
        return view('home.search',compact('artical_list','artical_detail','configs','user_infos','links'));
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
        echo 3333;
    }

   
}
