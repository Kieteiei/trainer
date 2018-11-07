<?php

namespace App\Http\Controllers\Trainer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Session;
use Storage;
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

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }

    public function renderOne($course_id)
    {
        $user = Session::get('auth_user');
        $course = Course::where('user_id', $user->user_id)
            ->where('course_id', $course_id)
            ->first();

        if (! $course) {
            return redirect()->back();
        }

        return view('page.trainer.course-edit', [
            'course' => $course
        ]);
    }

    public function update(Request $request, $course_id)
    {
        $user = Session::get('auth_user');
        $request->merge([
            'user_id' => $user->user_id,
        ]);

        if ($request->hasFile('photo')) {
            $course = Course::where('user_id', $user->user_id)
                ->where('course_id', $course_id)
                ->first();

            Storage::delete($course->img_path);
            $path = $request->file('photo')->store('course');
            $request->merge([
                'img_path' => $path
            ]);
        }

        Course::where('user_id', $user->user_id)
            ->where('course_id', $course_id)
            ->update($request->except(['_token', '_method', 'photo']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }

    public function delete(Request $reques, $course_id)
    {
        $user = Session::get('auth_user');

        $course = Course::where('user_id', $user->user_id)
            ->where('course_id', $course_id)
            ->first();

        Storage::delete($course->img_path);

        Course::where('user_id', $user->user_id)
            ->where('course_id', $course_id)
            ->delete();

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }
}
