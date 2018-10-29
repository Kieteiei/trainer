<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Course;

class JsonController extends Controller 
{
  public function showuser()
  {
    $user = new User();
    $user->all();
    $result = $user;
    return$result;   
  } 


  public function showcourse()
  {
    $course = new Course();
    $course->all();
    $result = $course;
    return $result;
  }
}