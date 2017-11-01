<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class AdvertisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());
       
         $where = [];
        $ob = DB::table('advert');
         // dd($ob);
        // 判断是否搜索了name字段
        if($request->has('cid')){
            // 获取用户搜索的cid字段的值
            $cid = $request->input('cid');
            $where['cid'] = $cid;
            //给查询语句添加上where条件
            $ob->where('cid', 'like', '%'.$cid.'%');
        }


        $list = $ob->paginate(5);
        return view('admin.advert.advertising', ['adve' => $list,'where'=>$where]);



        // $uid=$request->get('ad_id');

        // $uid = DB::table('advert')->where('cid','like', '%'.$uid.'%')->get();

        // return view('admin.advert.advertising', ['adve' => $uid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 11111111;
         return view('admin.advert.add');
        
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
        // $users = DB::table('advert')->select('state', 'start_time as open')->get();
        // dd($users);
            $input=$request->except('_token','query_string');
            // 执行添加并且得到id
            $id = DB::table('advert')->insertGetId($input);
            //如果有id说明添加成功
            if($id > 0){
                //跳转到admin/advert路由，携带一个闪存
                return redirect('admin/advert')->with('msg','添加成功');
            } 

          
    }

    /**
     * Display the speecified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      // echo 2222;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {  
         
       
         $user = DB::table('advert')->where('ad_id', $id)->first();
          // dd($user);
          return view('admin/advert/update',['adve'=>$user]);    
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

        
          $data = $request->except('_token','_method','query_string');
          
         $res = DB::table('advert')->where('ad_id', $id)->update($data);

         // dd($res);
         if($res > 0){
             return redirect('admin/advert')->with('msg', '修改成功');
         }else{
        return redirect('admin/advert')->with('msg', '修改失败(或者并未修改)');
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
          // return 11111;
        
         $re = DB::table('advert')->where('ad_id', $id)->delete();
        
        if($re > 0){
            return redirect('admin/advert')->with('msg', '删除成功');
        }else{
            return redirect('admin/advert')->with('msg', '删除失败');
        }
     }
}
