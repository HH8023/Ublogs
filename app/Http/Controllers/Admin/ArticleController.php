<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Artcal_list;
use App\Http\Models\Artcal_detail;
class ArticleController extends Controller
{
    /**
     * 图文列表
     *
     * @return \Illuminate\Http\Response
     */

    public function plist()
    {
        return view('admin.article.plist');
    }

    public function index()
    {   
        //连接文章列表的模型
        $title = Artcal_list::paginate(1);
        //  $ad = $title->detail->content;
        // dd($title);

        return view('admin.article.index', ['title' => $title]);

    }

    /**
     * Show the form for creating a new resource.
     *添加文章
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$title =DB::table('artical_list')->get();
        return view('admin.article.add');
    }

    /**
     * Store a newly created resource in storage.
     *内容没完成.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //去除令牌
        $add = $request->except('_token','query_string');
        $add = new Artcal_list;
        $title = new Artcal_detail;
        
       
        // 文章list表添加内容
        $add->title = $request->title;
        $add->user_id = $request->user_id;
        $add->pro_id = $request->pro_id;
        $add->add_time = $request->add_time;
        
        //把主表的id赋给art_id
        $add->save();
        $id = $add->id;

        //文章内容表art_id,内容添加
        $title->art_id = $id;
        $title->content = $request->content;
        $title->save();

        return view('admin.article.add');


       
    }

    /**
     * 文章查看页面
     *内容没完成
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 查看list表信息
        $title = Artcal_list::where('id',$id)->first();

        // 查看detail表内容
        $aid= Artcal_detail::where('art_id',$id)->first();
       //dd($aid);
        return view('admin.article.artEditor',['title' => $title,'aid'=>$aid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       echo 1111;
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
        echo 1213;
       //return view('admin.article.wzbj');
    }

    /**
     * Remove the specified resource from storage.
     *文章删除
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
       //查询要删除的记录的模型
        $title = Artcal_list::find($id);
      
        // $aid= Artcal_detail::find($id)
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
//        return json_encode($data);
//        return response()->json($data);
        return  $data;
    }
}
