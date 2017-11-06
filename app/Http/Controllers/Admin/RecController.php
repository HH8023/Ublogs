<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Models\Artcal_list;
use App\Http\Models\Artcal_detail;
use App\Http\Models\UserInfo;
use App\Http\Models\Subject;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class RecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

         //栏目列表,并获取栏目传过来的id
        $pro = Subject::get();
        $info = $request->input('pid')?$request->input('pid'):'';;
        
        //文章列表,并获取栏目传过来的name进行搜索
        $art = Artcal_list::get();

        $input = $request->input('name')?$request->input('name'):'';   
        $user = UserInfo::get();
        if ($info) {
            $title = Artcal_list::orderBy('id','desc')->where('status',1)->where('title','like','%'.$input.'%')->where('pro_id',$info)->paginate(5);
        }else{
            $title = Artcal_list::orderBy('id','desc')->where('status',1)->where('title','like','%'.$input.'%')->paginate(5);
        }

        return view('admin.recovery.index',compact('title','input','pro','user'));


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
        $res = DB::table('artical_list')->where('id', $id)->first();
//        dd($res);
        if ($res->status == 1) {
            $res->status = 0;
            //dd($res);
            $res = $res->status;
            $res = DB::table('artical_list')->where('id', $id)->update(['status'=>$res]);
    //       dd($res);
            return redirect('admin/recovery');
        } else {
            $res->status = 1;
            //dd($res);
            $res = $res->status;
            $res = DB::table('artical_list')->where('id', $id)->update(['status'=>$res]);
//          dd($res);
            return redirect('admin/article');
        }
      
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
        //查询要删除的记录的模型
        $title = Artcal_list::find($id);
        $re = Artcal_detail::where('art_id',$id)->delete();
        //$title= Artcal_detail::find($id)
        //执行删除操作
        $re = $title->delete();
        //根据返回的结果处理成功和失败
        if($re){
          $data=[
              'status'=>0,
              'msg'=>'删除成功'
          ];
        }else{
            $data=[
                'status'=>1,
                'msg'=>'删除失败'
            ];
        }
        return  $data;
    }
}
