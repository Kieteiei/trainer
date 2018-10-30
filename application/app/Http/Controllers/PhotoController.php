<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $photos = Photo::all();

        return view('photo', [
            'photos' => $photos
        ]);
    }
}