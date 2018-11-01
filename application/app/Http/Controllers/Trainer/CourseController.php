<?php

namespace App\Http\Controllers\Trainer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use App\Models\Course;

class CourseController extends Controller
{
    public function renderAll()
    {
        $user = Session::get('auth_user');
        $courses = Course::where('user_id', $user->user_id)->get();

        return view('page.trainer.course', [
            'courses' => $courses
        ]);
    }

    public function create(Request $request)
    {
        $user = Session::get('auth_user');
        $path = $request->file('photo')->store('course');

        $request->merge([
            'user_id' => $user->user_id,
            'img_path' => $path
        ]);

        Course::_create($request->except(['_token', 'photo']));

        return 'success';
    }
}
