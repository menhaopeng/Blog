<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class IndexController extends CommonController
{
    public function index()
    {
        return view('admin.index');
    }
    public function info()
    {
        return view('admin.info');
    }

    /*修改密码*/
    public function repass()
    {
        if ($input = Input::all()){
            //验证规则
            $rules = [
                //判断新密码不能为空
                'password' => 'required|between:6,20|confirmed',
            ];
            //返回信息
            $message = [
                'password.required' => '新密码不能为空！',
                'password.between' => '新密码长度必须在6-12位！',
                'password.confirmed' => '新密码跟确认密码不一致！',
            ];
            $validator = Validator::make($input, $rules, $message);
            //passes()判断验证是否成功
            if ($validator->passes()){
                $user = User::first();
                $_password = Crypt::decrypt($user->password);
                if ($_password == $input['password_o']){
                    $user->password = Crypt::encrypt($input['password']);
                    $user->update();
                    return back()->with('errors', '密码修改成功！');
                }else{
                    return back()->with('errors', '原密码错误！');
                }
            }else{
                return back()->withErrors($validator);
            }
        }else{
            return view('admin.repass');
        }
    }
}
