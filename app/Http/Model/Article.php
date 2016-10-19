<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';      //设置表名称
    protected $primaryKey = 'art_id';      //设置主键字段
    public $timestamps = false;     //取消自动时间
    protected $guarded = [];
}
