<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';      //设置表名称
    protected $primaryKey = 'user_id';      //设置主键字段
    public $timestamps = false;     //取消自动时间

    public function tree()
    {
        $category = $this->all();
        return $this->getTree($category);
    }

    public function getTree($data)
    {
        $arr = array();
        foreach ($data as $k => $v) {
            if ($v->cate_pid == 0) {
                $data[$k]['_cate_name'] = $data[$k]['cate_name'];
                $arr[] = $data[$k];
                foreach ($data as $m => $n) {
                    if ($n->cate_pid == $v->cate_id) {
                        $data[$m]['_cate_name'] = "┣" . $data[$m]['cate_name'];
                        $arr[] = $data[$m];
                    }
                }
            }
        }
        return $arr;
    }
}
