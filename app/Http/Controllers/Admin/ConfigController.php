<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ConfigController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configs = DB::table('configs');
        $configs=$configs->get();
        // dd($configs);
        return view('admin.config.index',['configs' => $configs]);
        

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // $configs = DB::table('configs')
      //       ->where('id', 1)
      //       ->update(['$configs' => 1]);
      
        $configs = $request->except('_token', '_method');
        // dd($configs);
        $res = DB::table('configs')->where('id', $id)->update($configs);
        if($res > 0){
            return redirect('admin/config')->with('msg', '修改成功');
        }else{
            return redirect('admin/config')->with('msg', '修改失败');
        }
        
    }


}
