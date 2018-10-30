<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class PageController extends Controller 
{
    public function index() 
    {
        return view('page.public.home');
    }

    public function renderCalBmi(Request $request) 
    {
        $weight = $request->weight;
        $height = $request->height;
      
        $height = $height/100;
       
        $bmi = $weight/($height*$height);
       
       
        if ($bmi<=18.50){
            $result = "น้ำหนักน้อย / ผอม";
            $risk = "มากกว่าคนปกติ";
        } else if($bmi>18.50 && $bmi<22.90){
            $result = "ปกติ (สุขภาพดี)";   
            $risk = "ปกติ";
        } else if($bmi>23 && $bmi<24.90){
            $result = "ท้วม / โรคอ้วนระดับ 1";   
            $risk = "อันตรายระดับ 1";
        } else if($bmi>25 && $bmi<29.90){
            $result = "อ้วน / โรคอ้วนระดับ 2";   
            $risk = "อันตรายระดับ 2";
        } else if($bmi>30){
            $result = "อ้วนมาก / โรคอ้วนระดับ 3";
            $risk = "อันตรายระดับ 3";   
        }

        return view('page.public.cal-bmi', [
            'bmi' => $bmi,
            'result' => $result,
            'risk' => $risk
        ]);
    }
     
    public function renderBmi()
    {
        return view('page.public.bmi');
    }

    public function renderBmr()
    {
        return view('page.public.bmr');
    }
}