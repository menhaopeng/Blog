<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Navs;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class NavsController extends Controller
{
    public function index()
    {
        $data = Navs::orderBy('nav_order', 'asc')->get();
        return view('admin.Navs.index', compact('data'));
    }

    public function changeOrder()
    {
        $input = Input::all();
        $Navs = Navs::find($input['nav_id']);
        $Navs->nav_order = $input['nav_order'];
        $re = $Navs->update();
        if ($re) {
            $data = [
                'status' => 1,
                'msg' => '自定义导航排序更新成功！',
            ];
        } else {
            $data = [
                'status' => 2,
                'msg' => '自定义导航排序更新失败！请稍后重试',
            ];
        }
        return $data;
    }

    //添加自定义导航
    public function create()
    {
        return view('admin.Navs.add');
    }

    //添加自定义导航提交
    public function store()
    {
        $input = Input::except('_token');
        $reles = [
            'nav_name' => 'required',
            'nav_url' => 'required',
        ];
        $message = [
            'nav_name.required' => '导航名称不能为空！',
            'nav_url.required' => '导航Url不能为空！',
        ];
        $validator = Validator::make($input, $reles, $message);
        if ($validator->passes()) {
            $re = Navs::create($input);
            if ($re) {
                return redirect('admin/navs');
            } else {
                return back()->withErrors('自定义导航添加错误，请稍后重试！');
            }
        } else {
            return back()->withErrors($validator);
        }
    }

    //编辑自定义导航
    public function edit($nav_id)
    {
        $field = Navs::find($nav_id);
        return view('admin.navs.edit', compact('field'));
    }

    //更新分类信息
    public function update($nav_id)
    {
        $input = Input::except('_token', '_method');
        $re = Navs::where('nav_id', $nav_id)->update($input);
        if ($re) {
            return redirect('admin/navs');
        } else {
            return back()->withErrors('修改导航失败，请稍后重试！');
        }
    }

    //删除自定义导航信息
    public function destroy($nav_id)
    {
        $re = Navs::where('nav_id', $nav_id)->delete();
        if ($re) {
            $data = [
                'status' => 0,
                'msg' => '删除导航成功！',
            ];
        } else {
            $data = [
                'status' => 1,
                'msg' => '删除导航失败，请稍后重试！',
            ];
        }
        return $data;
    }

    //显示单个分类信息
    public function show()
    {

    }
}
