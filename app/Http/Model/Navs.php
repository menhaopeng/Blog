<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Navs extends Model
{
    protected $table = 'navs';      //设置表名称
    protected $primaryKey = 'nav_id';      //设置主键字段
    public $timestamps = false;     //取消自动时间
    protected $guarded = [];
}
