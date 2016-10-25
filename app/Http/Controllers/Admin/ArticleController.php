<?php

namespace App\Http\Controllers\admin;

use App\Http\Model\Article;
use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArticleController extends CommonController
{
    public function index()
    {
        $data = Article::orderBy('art_id', 'desc')->paginate(10);
        return view('admin.article.index', compact('data'));
    }


    //添加文章
    public function create()
    {
        $data = (new Category)->tree();
        return view('admin.article.add', compact('data'));
    }

    //添加分类提交
    public function store()
    {
        $input = Input::except('_token');
        $input['art_time'] = time();
        $reles = [
            'art_title' => 'required',
            'art_content' => 'required',
        ];
        $message = [
            'art_title.required' => '文章标题不能为空！',
            'art_content.required' => '文章内容不能为空！',
        ];
        $validator = Validator::make($input, $reles, $message);
        if ($validator->passes()) {
            $re = Article::create($input);
            if ($re) {
                return redirect('admin/article');
            } else {
                return back()->withErrors('填充数据错误，请稍后重试！');
            }
        } else {
            return back()->withErrors($validator);
        }
    }

    //编辑文章
    public function edit($art_id)
    {
        $field = Article::find($art_id);
        $data = (new Category)->tree();
        return view('admin.article.edit', compact('field', 'data'));
    }

    //更新文章信息
    public function update($art_id)
    {
        $input = Input::except('_token', '_method');
        $re = Article::where('art_id', $art_id)->update($input);
        if ($re) {
            return redirect('admin/article');
        } else {
            return back()->withErrors('修改文章失败，请稍后重试！');
        }
    }

    //删除单个文章信息
    public function destroy($art_id)
    {
        $re = Article::where('art_id', $art_id)->delete();
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => '删除文章成功！',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '删除文章失败，请稍后重试！',
            ];
        }
        return $data;
    }
}
