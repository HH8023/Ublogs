<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    //将数据库的配置文件写入web.php文件中，方便读取配置文件
    public function putFile()
    {
        //获取要被写入的内容
        //返回所需数据的数组
       $con =  Config::lists('conf_content','conf_name')->all();

        //将数组变成字符串格式
      $str= '<?php   return '.var_export($con,true).';';
        //die;

        //将config表中的conf_name和conf_content两列的内容写入config文件夹下的web.php文件中
        //file_put_content(要写入的文件,要被写入的内容)

        file_put_contents(base_path().'/config/web.php',$str);
    }

    public function changeContent(Request $request)
    {
        //dd($request->all());
        $input = $request->except('_token');
        foreach($input['id'] as $k=>$v){
            $conf = Config::find($v);
            $conf->update(['conf_content'=>$input['conf_content'][$k]]);
        }
        $this->putFile();
        return redirect('admin/config');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.config.index');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
