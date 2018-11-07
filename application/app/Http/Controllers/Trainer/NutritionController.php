<?php

namespace App\Http\Controllers\Trainer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use App\Models\Nutrition;

class NutritionController extends Controller
{
    public function create(Request $request)
    {
        Nutrition::_create($request->except(['_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $nutrition_id)
    {
        $auth_user = Session::get('auth_user');
        $nutrition = Nutrition::join('training', 'nutrition.training_id', '=', 'training.training_id')
            ->where('nutrition_id', $nutrition_id)
            ->where(function ($query) use ($auth_user) {
                $query->where('training.trainer_user_id', $auth_user->user_id)
                    ->orWhere('training.customer_user_id', $auth_user->user_id);
            })
            ->first();

        Nutrition::where('nutrition_id', $nutrition->nutrition_id)
            ->update($request->except(['_method', '_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }
}
