<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $where = [];
        $ob = DB::table('comment');
        // dd($request->all());
        if($request->has('uid')){
            $uid = $request->input('uid');
            $where['uid'] = $uid;
            $ob->where('uid','like','%'.$uid.'%');
        }
        if($request->has('aid')){
            $aid = $request->input('aid');
            $where['aid'] = $aid;
            $ob->where('aid','like','%'.$aid.'%');
        }
        $list = $ob->paginate(1);
        // dd($list);
        return view('admin.comment.index', ['index'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.comment.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->except('_token');
        // dd($data);
        $id = DB::table('comment')->insertGetId($data);
        if($id > 0){
            return redirect('/admin/comment')->with('msg','添加成功');
        }
        // dd($res);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo 12345678;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cid)
    {
        $comment = DB::table('comment')->where('cid',$cid)->first();
        // dd($comment);
        return view('admin.comment.edit',['comment'=>$comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cid)
    {
        // dd($request->all());
        $data = $request->except('_token','_method');
        $res = DB::table('comment')->where('cid',$cid)->update($data);
        if($res > 0){
            return redirect('/admin/comment')->with('msg','修改成功');
        }else{
            return redirect('/admin/comment')->with('msg','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cid)
    {
        $res = DB::table('comment')->where('cid',$cid)->delete();
        // dd($res);
        if($res > 0){
            return redirect('/admin/comment')->with('msg','删除成功');
            // return redirect('/admin/comment')->with('msg','删除成功');
        }else{
            return redirect('/admin/comment')->with('msg','删除失败');
        }
    }
}
