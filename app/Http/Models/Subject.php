<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{   
	//获取文章列表表单
    public $table = 'subject';

    //关联的表的主键
    public $primaryKey = 'id';
    public $timestamps = false;
	
	//不允许数据表被批量操作的字段
    public $guarded = [];

    public function list ()
    {
    	return $this->hasMany('App\Http\Models\Artcal_list','pro_id','id');
    }

    //栏目关注
    public function att_id()
    {
        return $this->belongsTo('App\Http\Models\Attentions','pro_id','id');
    }
    // use SoftDeletes;

    // public $dates = ['deleted_at'];
}
