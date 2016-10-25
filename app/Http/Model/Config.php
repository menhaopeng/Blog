<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'config';      //设置表名称
    protected $primaryKey = 'conf_id';      //设置主键字段
    public $timestamps = false;     //取消自动时间
    protected $guarded = [];
}
