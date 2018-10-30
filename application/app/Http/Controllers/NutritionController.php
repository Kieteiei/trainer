<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\nutrition;

class NutritionController extends Controller 
{
    public function save(Request $request) 
    {
        if(!$request->ntName)
        {
            echo "กรุณาเพิ่มชื่อโภชนาการ!";

        }
        else{
        $nutrition =new nutrition();
        $nutrition->ntName = $request->ntName;
        $nutrition->ntDetail=$request->ntDetail;
        $nutrition->ntQuote=$request->ntQuote;
        $nutrition->userID = $request->userID;
        $nutrition->save();
        return $request;
        }
        
    }

    public function update(Request $request)
    {
        if(!$request->ntName)
        {
            echo "กรุณาเพิ่มชื่อโภชนาการ!";

        }
        else{
        $nutrition =new nutrition();       
        $nutrition->where(
            "nutritionID","=",     $request->nutritionID,
            "ntName","=",   $request->ntName,
            "ntDetail","=",     $request->ntDetail,
            "ntQuote","=", $request->ntQuote,
            "userID","=",       $request->userID)->update($request->all());    
        return $request;
        }
    }
    public function delete(Request $request)
    {
        $nutrition =new nutrition();   
        $nutrition->where(
            "nutritionID","=", $request->nutritionID)->delete();
        return "delete";
    }
    


    public function show()
    {
         $nutrition = new nutrition();
        
        return $nutrition;
    }

    public function nutritionform()
    {
        $nutritions = Nutrition::all();

        return view('nutrition', [
            "nutritions" => $nutritions
        ]);
    }

}