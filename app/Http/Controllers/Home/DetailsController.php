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
       
         $comm = $request->all();
        // dd($comm);
        $user = DB::table('user_infos')
         ->join('artical_list','user_infos.uid','=','artical_list.user_id')->get();
         // dd($user); 
         $detail = DB::table('artical_detail')->get();
         // dd($artical_detail);
        //添加评论
         DB::table('comment')->insertGetId($comm);
    
        return view('home.details',compact('user','detail','links','configs')); 
 

    }

   
}
