<?php 

use Core\Controller;
use Core\Request;

use App\Models\Photo;

class PhotoController extends Controller 
{
    public function save(Request $request) 
    {
        $photo =new Photo();
        $photo->photoName = $request->photoName;

        $photo->localtionDetail = $request->file("file_name")->store("folder_name");

        $photo->photoQuote = $request->photoQuote;
        $photo->save();
        return view('photo');
   
    }
    
    public function photoform()
    {
        $photo =new Photo();
        $photo->all(); 
        return view('photo',[
            'photo'=>$photo
        ]);
    }

}