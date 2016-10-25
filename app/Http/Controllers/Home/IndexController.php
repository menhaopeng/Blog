<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Links;

class IndexController extends CommonController
{
    public function index()
    {
        //站长推荐 6篇点击量最高的文章
        $hot = Article::orderBy('art_view', 'desc')->take(6)->get();
        //文章推荐 5篇图文列表（带分页）
        $data = Article::orderBy('art_time', 'desc')->paginate(5);
        //最新文章 8篇最新发布的文章
        $new = Article::orderBy('art_time', 'desc')->take(8)->get();
        //友情链接
        $links = Links::orderBy('link_order', 'asc')->get();
        return view('home.index', compact('hot', 'data', 'new', 'links'));
    }

    public function cate()
    {
        return view('home.list');
    }

    public function art()
    {
        return view('home.new');
    }
}
