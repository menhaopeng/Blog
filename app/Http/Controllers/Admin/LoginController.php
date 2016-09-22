<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin;
use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

require_once 'resources/org/code/Code.class.php';

class LoginController extends CommonController
{
    public function login()
    {
        if ($input = Input::all()){  //判断是否有传递数据
            $code = new \Code();
            $_code = $code->get();  //获取验证码
            if (strtoupper($input['code']) != $_code){  //判断用户输入验证码是否正确（转换为大写）
                return back()->with('msg','验证码错误！'); //返回错误信息（session）
            }
            $user = User::first();
            if($user->username != $input['username'] || \Crypt::decrypt($user->password) != $input['password']){
                return back()->with('msg','用户名或密码错误！'); //返回错误信息（session）
            }
            session(['user'=>$user]);
            return redirect('admin/index');
        }else { 
            return view('admin.login');
        }
    }

    public function quit()
    {
        session(['user' => null]);
        return redirect('admin/login');
    }

    public function code()
    {
        $code = new \Code();
        $code->make();
    }
}
