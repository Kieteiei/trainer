<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('user_name', $request->user_name)
            ->where('password', $request->password)
            ->first();

        if ($user) {
            Session::put('auth_user', $user);
            Session::put('auth_type', $user->user_type);
            Session::flash('flash_toastr', [
                'type' => 'success',
                'message' => 'ยินดีต้อนรับเข้าสู่ระบบ'
            ]);
        } else {
            Session::flash('flash_toastr', [
                'type' => 'error',
                'message' => 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'
            ]);
        }

        return redirect()->back();
    }
}
