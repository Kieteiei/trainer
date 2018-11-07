<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;

class UserController extends Controller
{
    public function renderAll()
    {
        $users = User::all();

        return view('page.admin.user', [
            'users' => $users
        ]);
    }

    public function update(Request $request, $user_id)
    {
        $user = User::where('user_id', $user_id)
            ->update(['status' => $request->status]);

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }
}
