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

    public function detail ()
    {
    	return $this->hasone('App\Http\Models\Artcal_detail','art_id','id');
    }

    // use SoftDeletes;

    // public $dates = ['deleted_at'];
}
