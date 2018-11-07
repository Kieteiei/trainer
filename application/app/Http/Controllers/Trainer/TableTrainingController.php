<?php

namespace App\Http\Controllers\Trainer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TableTraining;
use Session;

class TableTrainingController extends Controller
{
    public function create(Request $request)
    {
        TableTraining::_create($request->except(['_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }

    public function delete($tabletraining_id)
    {
        TableTraining::where('tabletraining_id', $tabletraining_id)
            ->delete();

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }
}
