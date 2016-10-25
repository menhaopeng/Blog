<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategoryController extends CommonController
{
    public function index()
    {
        $category = (new Category)->tree();
        return view('admin.category.index')->with('data', $category);
    }

    public function changeOrder()
    {
        $input = Input::all();
        $categroy = Category::find($input['cate_id']);
        $categroy->cate_order = $input['cate_order'];
        $re = $categroy->update();
        if ($re) {
            $data = [
                'status' => 1,
                'msg' => '排序更新成功！',
            ];
        } else {
            $data = [
                'status' => 2,
                'msg' => '排序更新失败！请稍后重试',
            ];
        }
        return $data;
    }


    //添加分类
    public function create()
    {
        $data = Category::where('cate_pid', 0)->get();
        return view('admin.category.add', compact('data'));
    }

    //添加分类提交
    public function store()
    {
        $input = Input::except('_token');
        $reles = [
            'cate_name' => 'required',
        ];
        $message = [
            'cate_name.required' => '分类名称不能为空！',
        ];
        $validator = Validator::make($input, $reles, $message);
        if ($validator->passes()) {
            $re = Category::create($input);
            if ($re) {
                return redirect('admin/category');
            } else {
                return back()->withErrors('填充数据错误，请稍后重试！');
            }
        } else {
            return back()->withErrors($validator);
        }
    }

    //编辑分类
    public function edit($cate_id)
    {
        $field = Category::find($cate_id);
        $data = Category::where('cate_pid', 0)->get();
        return view('admin.category.edit', compact('field', 'data'));
    }

    //更新分类信息
    public function update($cate_id)
    {
        $input = Input::except('_token', '_method');
        $re = Category::where('cate_id', $cate_id)->update($input);
        if ($re) {
            return redirect('admin/category');
        } else {
            return back()->withErrors('修改分类失败，请稍后重试！');
        }
    }

    //删除单个分类信息
    public function destroy($cate_id)
    {
        $is_cate = Category::where('cate_pid',$cate_id)->get();
        if (!$is_cate->isEmpty()){
            $data = [
                'status' => 2,
                'msg' => '删除分类失败，请先删除该分类下的所有子分类后重试！',
            ];
        }else{
            $re = Category::where('cate_id', $cate_id)->delete();
            if ($re) {
                $data = [
                    'status' => 0,
                    'msg' => '删除分类成功！',
                ];
            } else {
                $data = [
                    'status' => 1,
                    'msg' => '删除分类失败，请稍后重试！',
                ];
            }
        }
        return $data;
    }

    //显示单个分类信息
    public function show()
    {

    }
}
