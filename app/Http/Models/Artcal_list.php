<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;


class Artcal_list extends Model
{	
	//获取文章列表表单
    public $table = 'artical_list';

    //关联的表的主键
    public $primaryKey = 'id';
    public $timestamps = false;
	
	//不允许数据表被批量操作的字段
    public $guarded = [];

    //内容
    public function detail ()
    {
    	return $this->hasone('App\Http\Models\Artcal_detail','art_id','id');
    }

    //栏目
    public function subject ()
    {
        return $this->belongsTo('App\Http\Models\subject','pro_id','id');
    }

    //用户
    public function userInfo ()
    {
        return $this->belongsTo('App\Http\Models\UserInfo','user_id','uid');
    }

}
