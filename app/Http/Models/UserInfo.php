<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
   //获取文章列表表单
    public $table = 'user_infos';

    //关联的表的主键
    public $primaryKey = 'id';
    public $timestamps = false;
	
	//不允许数据表被批量操作的字段
    public $guarded = [];

    //文章列表用户
    public function list ()
    {
        return $this->hasMany('App\Http\Models\Artcal_list','user_id','uid');
    }

    //用户关注一对多
    public function attentions ()
    {
        return $this->hasMany('App\Http\Models\Attentions','uid','uid');
    }

    //用户关注一对一
     public function att_id ()
    {
        return $this->belongsTo('App\Http\Models\Attentions','attention_id','uid');
    }

}
