<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Links;
use App\Http\Model\Navs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class CommonController extends Controller
{
    public function __construct()
    {
        $navs = Navs::all();
        //点击排行 5篇点击量最高的文章
        $hot = Article::select('art_id', 'art_title')->orderBy('art_view', 'desc')->take(5)->get();
        //最新文章 8篇最新发布的文章
        $new = Article::select('art_id', 'art_title')->orderBy('art_time', 'desc')->take(8)->get();
        //友情链接
        $links = Links::select('link_url', 'link_name')->orderBy('link_order', 'asc')->get();
        //共享
        View::share('navs', $navs);
        View::share('hot', $hot);
        View::share('new', $new);
        View::share('links', $links);
    }
}
