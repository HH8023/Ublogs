<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //设置表名
    const TABLE_NAME="";
    protected $table = self::TABLE_NAME;  
    public $timestamps = false;
}
