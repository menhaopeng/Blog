<?php

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';      //设置表名称
    protected $primaryKey = 'user_id';      //设置主键字段
    public $timestamps = false;     //取消自动时间
}
