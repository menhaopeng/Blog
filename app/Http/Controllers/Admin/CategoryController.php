<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

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
        if ($re){
            $data = [
                'status' => 1,
                'msg' => '排序更新成功！',
            ];
        }else{
            $data = [
                'status' => 2,
                'msg' => '排序更新失败！请稍后重试',
            ];
        }
        return $data;
    }

    public function store()
    {

    }

    public function create()
    {

    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function edit()
    {

    }
}
