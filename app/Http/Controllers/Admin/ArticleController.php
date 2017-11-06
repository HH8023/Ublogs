<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Artcal_list;
use App\Http\Models\Artcal_detail;

use App\Http\Models\Subject;
use Illuminate\Support\Facades\Input;
use DB;

class ArticleController extends Controller
{

     //文件上传方法
    public function upLoad(Request $request)
    {
        //获取上传的文件对象
        $file = Input::file('file_upload');
        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName;
            //返回文件的路径
            return  $filepath;
        }
    }

    public function index(Request $request)
    {   

        //栏目列表,并获取栏目传过来的id
        $pro = Subject::get();
        $info = $request->input('pid')?$request->input('pid'):'';;
        
        //文章列表,并获取栏目传过来的name进行搜索
        $art = Artcal_list::get();

        $input = $request->input('name')?$request->input('name'):'';   
        
        if ($info) {
            $title = Artcal_list::orderBy('id','desc')->where('status',0)->where('title','like','%'.$input.'%')->where('pro_id',$info)->paginate(5);
        }else{
            $title = Artcal_list::orderBy('id','desc')->where('status',0)->where('title','like','%'.$input.'%')->paginate(5);
        }

        return view('admin.article.index',compact('title','input','pro'));

    }

    /**
     * Show the form for creating a new resource.
     *添加文章
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $pro = Subject::get();
       
        return view('admin.article.add',['pro' => $pro]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //去除令牌
        $input = $request->except('_token');
        $add = new Artcal_list;
        $title = new Artcal_detail;

        // 文章list表添加内容
        $add->title = $request->title;
        $add->user_id = $request->user_id;
        $add->pro_id = $request->pro_id;

        $add->add_time = $request->add_time;
        $add->photo =$request->photo;
        
        //把主表的id赋给art_id
        $add->save();
        $id = $add->id;

        //文章内容表art_id,内容添加
        $title->art_id = $id;
        $title->content = $request->content;
        $title->save();
        //文章简介
        $art=$title->content;
        // 截取内容的长度
        if(strlen($art) > 260){
            $str = substr($art,3,260);
            $title->art_synopsis = $str;
            $detail =  $title->save();

        }else {

            $title->art_synopsis = $art;
            $title->save();
        }

        if($add){
            return redirect('admin/article');
        }else{
            //return '失败';
            return redirect('admin/article/create')->with('msg','添加失败');
        }      
    }

    /**
     * 文章查看页面
     *
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
        $re = Artcal_detail::where('art_id',$id)->delete();
        //$title= Artcal_detail::find($id)
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
        return  $data;
    }
}
