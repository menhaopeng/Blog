<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Links;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class LinksController extends Controller
{
    public function index()
    {
        $data = Links::orderBy('link_order', 'asc')->get();
        return view('admin.links.index', compact('data'));
    }

    public function changeOrder()
    {
        $input = Input::all();
        $links = Links::find($input['link_id']);
        $links->link_order = $input['link_order'];
        $re = $links->update();
        if ($re) {
            $data = [
                'status' => 1,
                'msg' => '友情链接排序更新成功！',
            ];
        } else {
            $data = [
                'status' => 2,
                'msg' => '友情链接排序更新失败！请稍后重试',
            ];
        }
        return $data;
    }

    //添加友情链接
    public function create()
    {
        return view('admin.links.add');
    }

    //添加友情链接提交
    public function store()
    {
        $input = Input::except('_token');
        $reles = [
            'link_name' => 'required',
            'link_url' => 'required',
        ];
        $message = [
            'link_name.required' => '链接名称不能为空！',
            'link_url.required' => '链接Url不能为空！',
        ];
        $validator = Validator::make($input, $reles, $message);
        if ($validator->passes()) {
            $re = Links::create($input);
            if ($re) {
                return redirect('admin/links');
            } else {
                return back()->withErrors('友情链接添加错误，请稍后重试！');
            }
        } else {
            return back()->withErrors($validator);
        }
    }

    //编辑友情链接
    public function edit($link_id)
    {
        $field = Links::find($link_id);
        return view('admin.links.edit', compact('field'));
    }

    //更新分类信息
    public function update($link_id)
    {
        $input = Input::except('_token', '_method');
        $re = Links::where('link_id', $link_id)->update($input);
        if ($re) {
            return redirect('admin/links');
        } else {
            return back()->withErrors('修改链接失败，请稍后重试！');
        }
    }

    //删除友情链接信息
    public function destroy($link_id)
    {
        $re = Links::where('link_id', $link_id)->delete();
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => '删除链接成功！',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '删除链接失败，请稍后重试！',
            ];
        }
        return $data;
    }

    //显示单个分类信息
    public function show()
    {

    }
}
