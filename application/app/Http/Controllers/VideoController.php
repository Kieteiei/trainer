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
        $video =new Video();
        $video->all();
        return view('videolink',[
            'video'=>$video
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