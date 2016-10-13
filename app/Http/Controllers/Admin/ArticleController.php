<?php

namespace App\Http\Controllers\admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends CommonController
{
    public function index()
    {
        echo '文章列表';
    }


    //添加文章
    public function create()
    {
        $data = (new Category)->tree();
        return view('admin.article.add', compact('data'));
    }
}
