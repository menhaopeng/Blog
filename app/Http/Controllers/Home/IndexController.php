<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Category;
use App\Http\Model\Links;

class IndexController extends CommonController
{
    public function index()
    {
        //站长推荐 6篇点击量最高的图文文章
        $pics = Article::orderBy('art_view', 'desc')->take(6)->get();
        //文章推荐 5篇图文列表（带分页）
        $data = Article::orderBy('art_time', 'desc')->paginate(5);
        return view('home.index', compact('pics', 'data'));
    }

    public function cate($cate_id)
    {
        //分类列表 4篇图文列表（带分页）
        $data = Article::where('cate_id', $cate_id)->orderBy('art_time', 'desc')->paginate(4);
        //查看次数
        Category::where('cate_id', $cate_id)->increment('cate_view');
        $field = Category::find($cate_id);
        $submenu = Category::where('cate_pid', $cate_id)->get();
        return view('home.list', compact('field', 'data', 'submenu'));
    }

    public function art($art_id)
    {
        $field = Article::Join('category', 'article.cate_id', '=', 'category.cate_id')->where('art_id', $art_id)->first();
        Article::where('art_id', $art_id)->increment('art_view');
        $article['pre'] = Article::where('art_id', '<', $art_id)->orderby('art_id','desc')->first();
        $article['next'] = Article::where('art_id', '>', $art_id)->orderby('art_id','asc')->first();
        return view('home.new', compact('field','article'));
    }
}
