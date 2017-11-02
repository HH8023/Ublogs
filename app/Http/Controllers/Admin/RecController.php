<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

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
        //保存搜索的条件
        $where = [];
        $ob = DB::table('artical_list')->where('status',1);
//        dd($ob->get());
        // 判断是否搜索了name字段
        if($request->has('name')){
            // 获取用户搜索的Name字段的值
            $name = $request->input('name');
            $where['name'] = $name;
            //给查询语句添加上where条件
            $ob->where('name', 'like', '%'.$name.'%');
        }

//        $num = DB::table('artical_lists');
//        dd($num->get());

        // 原生sql
        // $list = DB::select('select * from stu');
        // 等价于
        // 查询构造器（优雅）
        $title = $ob->paginate(3);
        return view('admin.recovery.index',['title' => $title, 'where'=>$where]);
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
        //
    }
}
