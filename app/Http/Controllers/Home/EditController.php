<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
     
        //
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           // return 111111;
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
                $file->move('./home/upload',$picname);
                // dd($file);

                if($file->getError()>0){
                    echo '上传失败';
                     die;
                }else{
                    echo '上传成功';
                }
            }
        
        // dd($data);
        $lis = [];
       $lis['content']= $data['content'];
// 　　　
        // dd($li);
        $data = $request->except('content','art_synopsis','_token');
        $data['photo'] = $picname;
        // dd($data);
        $list = DB::table('artical_list')->insertGetId($data);
        $lis['art_id'] = $list;
        $lis['art_synopsis'] = $request['art_synopsis'];
         // dd($lis);
        $lis = DB::table('artical_detail')->insertGetId($lis);
        if($list > 0){
            //跳转到admin/advert路由，携带一个闪存
        return redirect('home/edit')->with('msg','添加成功');
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
