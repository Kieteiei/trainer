<?php

namespace App\Http\Controllers\Trainer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use App\Models\PracticeRecord;

class PracticeRecordController extends Controller
{
    public function create(Request $request)
    {
        PracticeRecord::_create($request->except(['_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $practicerecord_id)
    {
        $auth_user = Session::get('auth_user');
        $practicerecord = PracticeRecord::join('training', 'practicerecord.training_id', '=', 'training.training_id')
            ->where('practicerecord_id', $practicerecord_id)
            ->where(function ($query) use ($auth_user) {
                $query->where('training.trainer_user_id', $auth_user->user_id)
                    ->orWhere('training.customer_user_id', $auth_user->user_id);
            })
            ->first();

        PracticeRecord::where('practicerecord_id', $practicerecord->practicerecord_id)
            ->update($request->except(['_method', '_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }

    public function delete($practicerecord_id)
    {
        $auth_user = Session::get('auth_user');
        PracticeRecord::join('training', 'practicerecord.training_id', '=', 'training.training_id')
            ->where('practicerecord_id', $practicerecord_id)
            ->where(function ($query) use ($auth_user) {
                $query->where('training.trainer_user_id', $auth_user->user_id)
                    ->orWhere('training.customer_user_id', $auth_user->user_id);
            })
            ->delete();

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }
}
