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
        $input = Input::all();
        var_dump($input);
    }
}
