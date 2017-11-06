<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Model\Links;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ob = DB::table('links');
        $links = $ob->paginate(8); 
        return view('admin.links.index',['links' => $links]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.links.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        //dd($input);
        $id = DB::table('links')->insertGetId($input);
        if ($id > 0) {
            return redirect('admin/links')->with('msg','添加成功');
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
        $links = DB::table('links')->where('lid', $id)->first();
        return view('admin.links.edit', ['links'=>$links]);
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
        // echo 12321;
        $data = $request->except('_token', '_method');
         // dd($request->all());
        $res = DB::table('links')->where('lid', $id)->update($data);
        if($res > 0){
            return redirect('admin/links')->with('msg', '修改成功');
        }else{
            return redirect('admin/links')->with('msg', '修改失败');
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
        $res = DB::table('links')->where('lid', $id)->delete();
        if($res > 0){
            return redirect('admin/links');
        }else{
            return redirect('admin/links');
        }
        
        // ->with('msg', '删除失败')
        // ->with('msg', '删除成功')
        // $re =  Links::where('lid',$id)->delete();
        // // 删除成功
        // if($re){
        //     $data = [
        //         'status'=>0,
        //         'msg'=>'删除成功',
        //     ];
        // }else{
        //     $data = [
        //         'status'=>1,
        //         'msg'=>'删除失败',
        //     ];
        // }
        // return $data;
     }
    
}
