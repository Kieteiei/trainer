<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appeal;

class AppealController extends Controller 
{
    public function save(Request $request) 
    {
        $appeal =new Appeal();
        $appeal->appealType = $request->appealType;
        $appeal->appealDetail = $request->appealDetail;
        $appeal->appealStatus = $request->appealStatus;
        $appeal->userID = $request->userID;
        $appeal->save();
        print_r($request);
        return 'save';
   
    }

    public function update(Request $request)
    {
        $appeal =new Appeal();     
        $appeal->where(
            "appealID","=",     $request->appealID,
            "appealType","=",   $request->appealType,
            "appealDetail","=",     $request->appealDetail,
            "appealStatus","=", $request->appealStatus,
            "userID","=",       $request->userID
            )
            ->update($request->all());    
        return $request;
        
    }
    public function delete(Request $request)
    {
        $appeal =new Appeal();
        $appeal->where(
            "appealID","=", $request->appealID)->delete($request);
        return "delete";
    }
    

    public function show()
    {
         $course = new Course();
       
        return $course;
    }
    public function appealform()
    {
        $appeals = Appeal::all();

        return view('appeal', [
            'appeals' => $appeals
        ]);
    }

    public function appealadmin()
    {
        $appeals = Appeal::all();

        return view('appeal_admin',[
            'appeals' => $appeals
        ]);
    }

}