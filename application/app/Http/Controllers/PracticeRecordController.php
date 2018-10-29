<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PracticeRecord;

class PracticeRecordController extends Controller 
{
    public function save(Request $request) 
    {
        $practicerecord =new PracticeRecord();
        $practicerecord->prName = $request->prName;
        $practicerecord->prDetail = $request->prDetail;
        $practicerecord->prDattime = $request->prDattime;
        $practicerecord->userID = $request->userID;
        $practicerecord->save();
        return $request;
   
    }

    public function update(Request $request)
    {
        $practicerecord =new PracticeRecord();       
        $practicerecord->where(
            "prID","=",     $request->prID,
            "prName","=",   $request->prName,
            "prDetail","=",     $request->prDetail,
            "prDattime","=", $request->prDattime,
            "userID","=",       $request->userID)->update($request->all());    
        return $request;
        
    }

    public function delete(Request $request)
    {
        $practicerecord =new PracticeRecord();       
        $practicerecord->where(
            "prID","=", $request->prID)->delete($request);
        return "delete";
    }

    public function show()
    {
        $practicerecord =new PracticeRecord();
        
        return $practicerecord;
    }
    public function prform()
    {
        $practicerecord =new PracticeRecord();
        $practicerecord->all();
        return view('practicerecord',[
            'practicerecord'=>$practicerecord
        ]);
    }

}