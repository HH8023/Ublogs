<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Attentions extends Model
{   
	//获取文章列表表单
    public $table = 'attentions';

    //关联的表的主键
    public $primaryKey = '';
    public $timestamps = false;
	
	//不允许数据表被批量操作的字段
    public $guarded = [];

    //用户关注一对多
    public function userinfo ()
    {
    	return $this->belongsTo('App\Http\Models\UserInfo','uid','uid');
    }

    //用户关注一对一
    public function uid ()
    {
        return $this->belongsTo('App\Http\Models\UserInfo','uid','attention_id');
    }

    //用户栏目关注一对多
    public function pro ()
    {
        return $this->belongsTo('App\Http\Models\Subject','id','pro_id');
    }

}
