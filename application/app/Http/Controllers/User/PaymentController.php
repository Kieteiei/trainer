<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use Storage;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function renderAll()
    {
        $auth_user = Session::get('auth_user');
        $payments = Payment::with('customer_user', 'trainer_user')
            ->where('customer_user_id', $auth_user->user_id)
            ->get();

        return view('page.user.payment', [
            'payments' => $payments
        ]);
    }

    public function update(Request $request, $payment_id)
    {
        $auth_user = Session::get('auth_user');

        if ($request->hasFile('photo')) {
            $payment = Payment::where('customer_user_id', $auth_user->user_id)
                ->where('payment_id', $payment_id)
                ->first();

            Storage::delete($payment->img_path);
            $path = $request->file('photo')->store('payment');
            $request->merge([
                'img_path' => $path
            ]);
        }

        Payment::where('customer_user_id', $auth_user->user_id)
            ->where('payment_id', $payment_id)
            ->update($request->except(['_token', '_method', 'photo']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }
}
