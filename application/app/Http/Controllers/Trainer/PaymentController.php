<?php

namespace App\Http\Controllers\Trainer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function renderAll()
    {
        $auth_user = Session::get('auth_user');
        $payments = Payment::with('customer_user')->where('trainer_user_id', $auth_user->user_id)->get();

        return view('page.trainer.payment', [
            'payments' => $payments
        ]);
    }

    public function update(Request $request, $payment_id)
    {
        $auth_user = Session::get('auth_user');
        Payment::where('trainer_user_id', $auth_user->user_id)
            ->where('payment_id', $payment_id)
            ->update($request->except(['_method', '_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }
}
