<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //
    protected $table = 'links';
    protected $primaryKey = 'lid';
    protected $guarded = [];
    public $timestamps = false;
}
