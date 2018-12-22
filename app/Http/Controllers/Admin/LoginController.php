<?php
/**
 * Created by PhpStorm.
 * User: 创造404
 * Date: 2018/12/10
 * Time: 14:39
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {


        if ($input = $request->all()) {
            if (Auth::attempt(['admin_name' => $input['username'], 'password' => $input['password'], 'user_type' => 1])) {
                session(['user' => Auth::user()]);
                return redirect('lailelaodi/index');
            } else {
                return back()->with('msg', '用户名或密码错误!');
            }
        } else {
            return view('admin.login');
        }
    }

    //退出方法
    public function logout()
    {
        session(['user' => null]);
        return redirect('lailelaodi/login');
    }
}