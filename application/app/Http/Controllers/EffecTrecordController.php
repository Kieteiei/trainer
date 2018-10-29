<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Core\Validator;
use Core\File;

use App\Models\EffectRrecord;

class EffecTrecordController extends Controller 
{
    
    public function save(Request $request) 
    {
        $effectrecord =new EffectRrecord();
        $effectrecord->prID = $request->prID;
        $effectrecord->effect = $request->effect;
        $effectrecord->hige = $request->hige;
        $effectrecord->weihth = $request->weihth;
        $effectrecord->erDatetime = $request->erDatetime;
        $effectrecord->userID = $request->userID;
        $effectrecord->save();
        //print_r($request);
        return $request;
   
    }


    public function update(Request $request)
    {
        $effectrecord =new EffectRrecord();      
        $effectrecord->where(
            "erID","=",     $request->erID,
            "prID","=",   $request->prID,
            "effect","=",     $request->effect,
            "weihth","=", $request->weihth,
            "hige","=", $request->hige,
            "erDatetime","=", $request->erDatetime,
            "userID","=",       $request->userID)->update($request->all());    
        return $request;
        
    }

    public function delete(Request $request)
    {
        $effectrecord =new EffectRrecord();   
        $effectrecord->where(
            "erID","=", $request->erID)->delete($request);
        return "delete";
    }

    public function show()
    {
        $effectrecord =new EffectRrecord();
        
        return $effectrecord;
    public function erform()
    {
        $effectrecord =new EffectRrecord();
        $effectrecord->all();

        return view('effectrecord',[
            'effectrecord'=>$effectrecord
        ]);
    }

}