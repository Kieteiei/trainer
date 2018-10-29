<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bmiController extends Controller 
{
    public function bmi(Request $request) 
    {
        return view('process');
    }
     
    public function bmiform()
    {
        return view('bmi');
    }

public function bmrform()
    {
        return view('bmr');
    }
}