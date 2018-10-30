<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posture;

class PostureController extends Controller 
{
    public function save(Request $request) 
    {
        if(!$request->postureName)
        {
            echo "กรุณาเพิ่มชื่อท่าการออกกำลังกาย!";
        }
        else{
        $posturs =new Posturs();
        $posturs->postureName = $request->postureName;
        $posturs->postureDetail = $request->postureDetail;
        $posturs->postureQuote = $request->postureQuote;
        $posturs->save();
        return $request;
        }
        
   
    }

    public function update(Request $request)
    {
        $posturs =new Posturs();     
        $posturs->where(
            "postureID","=",     $request->postureID,
            "postureName","=",   $request->postureName,
            "postureDetail","=",     $request->postureDetail,
            "postureQuote","=", $request->postureQuote)->update($request->all());    
        return $request;
        
    }
    public function delete(Request $request)
    {
        $posturs =new Posturs();  
        $posturs->where(
            "postureID","=", $request->postureID)->delete($request);
        return "delete";
    }

    public function show()
    {
        $posturs =new Posturs();
        return $posturs;
    }

    public function postureform()
    {
        $postures = Posture::all();

        return view('posture', [
            'postures' => $postures
        ]);
    }

}