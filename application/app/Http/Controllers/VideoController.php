<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Video;

class VideoController extends Controller 
{
   
    public function show()
    {
         $course = new Course();
       
         return  $course;
    }
    public function videoform()
    {
        $videos = Video::all();

        return view('video', [
            'videos' => $videos
        ]);
    }

    public function save(Request $request) 
    {
        $video =new Video();
        $video->videoName = $request->videoName;
        $video->videoDetail = $request->videoDetail;
        $video->save();
        return $request;
       
   
    }

}