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
        // 显示广告首页
       
       
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


        $list = $ob->paginate(3);
        return view('admin.advert.advertising', ['adve' => $list,'where'=>$where]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        // 显示添加页面
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
           
              if($request->file('ad_image')){
                $input=$request->except('_token');
                  // dd($input);
                //获取图片
                $pic = $input['ad_image'];
                  // dd($pic);
                //文件的后缀名
                $clientName = $pic -> getClientOriginalExtension();
                  // dd($clientName);
                //图片的存放的地址
                $path = 'admin/img/';
                //
                $filename = time().rand(1000, 9999).".".$clientName;
                $avatar = $path.$filename;
                // dd($avatar);
                $pic->move($path,$filename);
                //添加数据库
                $id = DB::table('advert')->insertGetId($input);
              //如果有id说明添加成功
             
               if($id > 0){
                    //跳转到admin/advert路由，携带一个闪存
                return redirect('admin/advert')->with('msg','添加成功');
                } 
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
         
          //显示修改页面
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
           


         
          //执行修改
         
              // echo 111111111;
                // $input=$request->except('_token');
        $data = $request->except('_token','_method','query_string');
          



        $res = DB::table('advert')->where('ad_id', $id)->update($data);

         // dd($res);
         if($res > 0){
             return redirect('admin/advert')->with('msg', '修改成功');
         }else{
        return redirect('admin/advert')->with('msg', '修改失败(或者并未修改)');
         }

      

          // 
          // $data = $request->except('_token','_method','query_string');
          
      
     
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
          // 删除
        
         $re = DB::table('advert')->where('ad_id', $id)->delete();
        
        if($re > 0){
            return redirect('admin/advert')->with('msg', '删除成功');
        }else{
            return redirect('admin/advert')->with('msg', '删除失败');
        }
     }
}
