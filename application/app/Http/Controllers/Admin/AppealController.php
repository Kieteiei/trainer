<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Appeal;
use Session;

class AppealController extends Controller
{
    public function renderAll()
    {
        $appeals = Appeal::with('reporter_user', 'reported_user')->get();

        return view('page.admin.appeal', [
            'appeals' => $appeals
        ]);
    }

    public function delete(Request $request, $appeal_id)
    {
        Appeal::where('appeal_id', $appeal_id)->delete();

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }
}
