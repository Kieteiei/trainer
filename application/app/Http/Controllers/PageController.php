<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class PageController extends Controller 
{
   public function index() 
  {
    return view('home');
  }

  public function showuser()
  {
    $user = new User();
    $user->all();
    $result = $user->data();

    return $result;
  } 
}