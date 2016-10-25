<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Config;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ConfigController extends Controller
{
    public function index()
    {
        $data = Config::orderBy('conf_order', 'asc')->get();
        return view('admin.config.index', compact('data'));
    }

    public function changeOrder()
    {
        $input = Input::all();
        $Config = Config::find($input['conf_id']);
        $Config->conf_order = $input['conf_order'];
        $re = $Config->update();
        if ($re) {
            $data = [
                'status' => 1,
                'msg' => '配置项排序更新成功！',
            ];
        } else {
            $data = [
                'status' => 2,
                'msg' => '配置项排序更新失败！请稍后重试',
            ];
        }
        return $data;
    }

    //添加配置项
    public function create()
    {
        return view('admin.config.add');
    }

    //添加配置项提交
    public function store()
    {
        $input = Input::except('_token');
        $reles = [
            'conf_name' => 'required',
            'conf_title' => 'required',
        ];
        $message = [
            'conf_name.required' => '导航名称不能为空！',
            'conf_title.required' => '导航标题不能为空！',
        ];
        $validator = Validator::make($input, $reles, $message);
        if ($validator->passes()) {
            $re = Config::create($input);
            if ($re) {
                return redirect('admin/config');
            } else {
                return back()->withErrors('配置项添加错误，请稍后重试！');
            }
        } else {
            return back()->withErrors($validator);
        }
    }

    //编辑配置项
    public function edit($conf_id)
    {
        $field = Config::find($conf_id);
        return view('admin.config.edit', compact('field'));
    }

    //更新分类信息
    public function update($conf_id)
    {
        $input = Input::except('_token', '_method');
        $re = Config::where('conf_id', $conf_id)->update($input);
        if ($re) {
            return redirect('admin/config');
        } else {
            return back()->withErrors('修改导航失败，请稍后重试！');
        }
    }

    //删除配置项信息
    public function destroy($conf_id)
    {
        $re = Config::where('conf_id', $conf_id)->delete();
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
