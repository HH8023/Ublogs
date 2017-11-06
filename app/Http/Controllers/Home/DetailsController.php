<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
          // echo 1111111;
        //  //获取详情列表库
        //  $ob = DB::table('artical_detail')->get();
        // //获取文章列表库
        // // dd($ob);
        //  $list = DB::table('artical_list')->get();
        // dd($list);       
        // return view('home.details',['data'=>$ob,'list'=>$list]);
        
        $user = DB::table('user_infos')
         ->join('artical_list','user_infos.uid','=','artical_list.user_id')
         ->select('user_infos.nickname','user_infos.photo','artical_list.title','artical_list.add_time','artical_list.photo','artical_list.id')->first();
         // dd($user);
         // $rtical_list = DB::table('artical_list')->get();
         $artical_detail = DB::table('artical_detail')->first();
        // dd($artical_detail);
        return view('home.details',compact('user','artical_detail'));

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
