<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
class LoginController extends Controller
{
    public function index()
    {
        return view('Login');
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'tai_khoan' => $request->tai_khoan,
            'password' => $request->password
        ];

        if(Auth::guard('admin')->attempt($arr)) {
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Sai tên đăng nhập hoặc mật khẩu');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('Login');
    }
}
