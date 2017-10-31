<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class SubjectController extends Controller
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
        $ob = DB::table('subject');
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
        $list = $ob->paginate(3);
        return view('admin.subject.index',['list' => $list, 'where'=>$where]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subject.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //去除token
        $data = $request->except('_token');
        // 执行添加并且得到id
        $id = DB::table('subject')->insertGetId($data);
        //如果有id说明添加成功
        if($id > 0){
            //跳转到/types路由，携带一个闪存
            return redirect('admin/subject')->with('msg','添加成功');
        }
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
        // dd($id)->all();
        $list = DB::table('subject')->where('id', $id)->first();
        return view('admin.subject.edit', ['list'=>$list]);
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
        $data = $request->except('_token', '_method');
         // dd($request->all());
        $res = DB::table('subject')->where('id', $id)->update($data);
        if($res > 0){
            return redirect('admin/subject')->with('msg', '修改成功');
        }else{
            return redirect('admin/subject')->with('msg', '修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $res = DB::table('subject')->where('id', $id)->delete();
        if($res > 0){
            return redirect('admin/subject')->with('msg', '删除成功');
        }else{
            return redirect('admin/subject')->with('msg', '删除失败');
        }
    }
}
