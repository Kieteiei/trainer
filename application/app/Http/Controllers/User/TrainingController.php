<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use App\Models\Training;

class TrainingController extends Controller
{
    public function renderAll()
    {
        $auth_user = Session::get('auth_user');
        $trainings = Training::with(['trainer_user', 'customer_user', 'practicerecords', 'tabletrainings'])
            ->where('customer_user_id', $auth_user->user_id)
            ->get();

        return view('page.user.training', [
            'trainings' => $trainings
        ]);
    }

    public function renderOne($training_id)
    {
        $auth_user = Session::get('auth_user');
        $training = Training::with(['trainer_user', 'customer_user', 'practicerecords', 'nutrition', 'tabletrainings'])
            ->where('training_id', $training_id)
            ->where('customer_user_id', $auth_user->user_id)
            ->first();

        return view('page.user.training-detail', [
            'training' => $training
        ]);
    }

    public function update(Request $request, $training_id)
    {
        Training::where('training_id', $training_id)
            ->update($request->except(['_method', '_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }
}
