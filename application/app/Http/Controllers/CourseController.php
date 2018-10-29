<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Core\Validator;
use Core\File;

use App\Models\Course;

class CourseController extends Controller 
{
    public function save(Request $request) 
    {
        if(!$request->courseName)
        {
            echo "กรุณาเพิ่มชื่อคอร์ส!";
        }
        else
        {
            $course =new Course();
            $course->courseName = $request->courseName;
            $course->activity=$request->activity;
            $course->coeseDattime=$request->coeseDattime;
            $course->userID = $request->userID;
            $course->save();
        }

        return $request;
    }

    public function update(Request $request)
    {
        if(!$request->courseName)
        {
            echo "กรุณาเพิ่มชื่อคอร์ส!";
        }
        else{
            $course =new Course();        
            $course->where(
                "courseID","=",     $request->courseID,
                "courseName","=",   $request->courseName,
                "activity","=",     $request->activity,
                "coeseDattime","=", $request->coeseDattime,
                "userID","=",       $request->userID
                )
                ->update($request->all());    
        }

        return $request;
    }

    public function updateAPI(Request $request)
    {
        $course =new Course();        
        $course->where(
            "courseName","=",     $request->courseNane,
            "activity","=",   $request->activity)->update($request->all());    
        return $request;
        
    }

    public function where(Request $request)
    {
        $course=new Course();
        $course->where( "courseName","=",   $request->courseName)->get();
        //$course->data();
        return $course;

       // SELECT * FROM Course where couersName = $request->courseName
    }

    public function delete(Request $request)
    {
        $course =new Course();
        $course->where(
            "courseID","=", $request->courseID)->delete();
        return "delete";
    }

    public function deletejson(Request $request)
    {
        $course =new Course();
        $course->where(
            "courseName","=", $request->courseName)->delete($request);
            return "delete";
    }
   
    public function show()
    {
         $course = new Course();
         $course->all();     

        return $course;
    }



    public function courseform()
    {
        $courses = new Course();
        $courses->all();

        return view('course', [
            'courses' => $courses
        ]);
        
    }
    public function courseformupdate()
    {
        return view('courseupdate');
    }
    public function courseformdelete()
    {
        return view('coursedelete');
    }
}