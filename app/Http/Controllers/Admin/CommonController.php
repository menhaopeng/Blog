<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CommonController extends Controller
{
    //上传图片
    public function upload()
    {
        $file = Input::file('Filedata');
        //检查上传文件是否有效
        if ($file->isValid()) {
            //$realpath = $file->getRealPath();//临时文件的绝对路径
            $extension = $file->getClientOriginalExtension();//上传文件的后缀
            $newname = date('YmdHis') . mt_rand(100, 999) . '.' . $extension;
            $file->move(base_path() . '/uploads', $newname);
            $_path = '/uploads/' . $newname;
            return $_path;
        }
    }
}
