<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class EditController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.edit');
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
            //从用户取出id
            $tel = session()->get('tel');
            // dd($tel);
            $uid = $tel->uid;
            // dd($uid);
             $data = $request->except('_token');

              // dd($data);
             // if($data['photo'] !== null){
           
                //判断文件是否有效
                if($data['photo']->isValid()){
                //生成上传文件对象
                $file = $data['photo'];
                // dd($file);
                //获取后缀名
                $ext = $file->getClientOriginalExtension();
                  // dd($ext);
                //随机生成新文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                //dd($picname);
                 // 另存为
                $file->move('./uploads',$picname);
                // dd($file);

                if($file->getError()>0){
                    echo '上传失败';
                     die;
                }else{
                    echo '上传成功';
                }
            }
        
        $lis = [];
       $lis['content']= $data['content'];
// 　　  
        // dd($li);
        $data = $request->except('content','art_synopsis','_token');
        $data['photo'] = 'uploads/'.$picname;
        // dd($data);
        //把用户放到列表
        $data['user_id'] = $uid;
        // dd($data);
        //列表
        $list = DB::table('artical_list')->insertGetId($data);
        // dd($list);
        $lis['art_id'] = $list;

       
        $lis['art_synopsis'] = $request['art_synopsis'];
         // dd($lis);
        //详情
        $lis = DB::table('artical_detail')->insertGetId($lis);
        //栏目
         // $lm = DB::table('subject')->get();
        if($list > 0){
       //跳转到admin/advert路由，携带一个闪存
        return redirect('home/index');
        }
    }

}
