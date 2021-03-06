<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $table = 'links';      //设置表名称
    protected $primaryKey = 'link_id';      //设置主键字段
    public $timestamps = false;     //取消自动时间
    protected $guarded = [];
}
