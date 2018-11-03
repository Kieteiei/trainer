<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    public function renderAll()
    {
        $courses = Course::with('user')->get();

        return view('page.user.course', [
            'courses' => $courses
        ]);
    }
}
