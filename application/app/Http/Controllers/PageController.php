<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Course;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Appeal;
use App\Models\Payment;
use App\Models\Training;
use Session;

class PageController extends Controller
{
    public function index()
    {
        return view('page.public.home');
    }

    public function renderCalBmi(Request $request)
    {
        $weight = $request->weight;
        $height = $request->height;
        $height = $height/100;
        $bmi = $weight/($height*$height);

        if ($bmi<=18.50){
            $result = "น้ำหนักน้อย / ผอม";
            $risk = "มากกว่าคนปกติ";
        } else if($bmi>18.50 && $bmi<22.90){
            $result = "ปกติ (สุขภาพดี)";
            $risk = "ปกติ";
        } else if($bmi>23 && $bmi<24.90){
            $result = "ท้วม / โรคอ้วนระดับ 1";
            $risk = "อันตรายระดับ 1";
        } else if($bmi>25 && $bmi<29.90){
            $result = "อ้วน / โรคอ้วนระดับ 2";
            $risk = "อันตรายระดับ 2";
        } else if($bmi>30){
            $result = "อ้วนมาก / โรคอ้วนระดับ 3";
            $risk = "อันตรายระดับ 3";
        }

        return view('page.public.cal-bmi', [
            'bmi' => $bmi,
            'result' => $result,
            'risk' => $risk
        ]);
    }

    public function renderBmi()
    {
        return view('page.public.bmi');
    }

    public function renderBmr()
    {
        return view('page.public.bmr');
    }

    public function renderUser()
    {
        if (! Session::has('auth_user')){
            return redirect()->back();
        }

        $auth_user = Session::get('auth_user');
        $user = User::where('user_id', $auth_user->user_id)->first();
        Session::put('auth_user', $user);

        return view('page.me', [
            'user' => $user
        ]);
    }

    public function updateUser(Request $request)
    {
        $auth_user = Session::get('auth_user');
        $user = User::where('user_id', $auth_user->user_id)
            ->update($request->except(['_method', '_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'บันทึกการเปลี่ยนแปลง'
        ]);

        return redirect()->back();
    }

    public function renderCourses(Request $request)
    {
        $courses = Course::with('user')->get();

        return view('page.public.course', [
            'courses' => $courses
        ]);
    }

    public function renderTrainerDetails($trainer_id)
    {
        $user = User::where('user_id', '=', $trainer_id)->first();
        if ($user && $user->user_type == 'ADMIN') {
            return redirect()->back();
        }

        $comments = Comment::where('trainer_user_id', '=', $trainer_id)
            ->with('comment_user')
            ->get();

        $posts = Post::where('user_id', '=', $trainer_id)
            ->get();

        return view('page.public.user-details', [
            'user' => $user,
            'comments' => $comments,
            'posts' => $posts
        ]);
    }

    public function createPost(Request $request, $trainer_id)
    {
        $user = Session::get('auth_user');
        $request->merge([
            'user_id' => $user->user_id,
        ]);

        Post::_create($request->except(['_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'ดำเนินการสำเร็จ'
        ]);

        return redirect()->back();
    }

    public function createComment(Request $request, $trainer_id)
    {
        $user = Session::get('auth_user');
        $request->merge([
            'comment_user_id' => $user->user_id,
            'trainer_user_id' => $trainer_id
        ]);

        Comment::_create($request->except(['_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'ดำเนินการสำเร็จ'
        ]);

        return redirect()->back();
    }

    public function submitAppeal(Request $request, $trainer_id)
    {
        $user = Session::get('auth_user');
        $request->merge([
            'reporter_user_id' => $user->user_id,
            'reported_user_id' => $trainer_id
        ]);

        Appeal::_create($request->except(['_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'ดำเนินการสำเร็จ'
        ]);

        return redirect()->back();
    }

    public function submitPayment(Request $request, $user_id)
    {
        $user = Session::get('auth_user');
        $request->merge([
            'trainer_user_id' => $user->user_id,
            'customer_user_id' => $user_id
        ]);

        Payment::_create($request->except(['_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'ดำเนินการสำเร็จ'
        ]);

        return redirect()->back();
    }

    public function submitTraining(Request $request, $user_id)
    {
        $user = Session::get('auth_user');
        $request->merge([
            'trainer_user_id' => $user->user_id,
            'customer_user_id' => $user_id
        ]);

        Training::_create($request->except(['_token']));

        Session::flash('flash_toastr', [
            'type' => 'success',
            'message' => 'ดำเนินการสำเร็จ'
        ]);

        return redirect()->back();
    }

    public function renderAllUsers(Request $request)
    {
        if ($request->query('search')) {
            $user_type = $request->query('user_type');
            $filter = $request->query('filter');
            $keyword = $request->query('keyword');

            $users = User::where('user_type', $user_type)
                ->where($filter, 'like', '%' . $keyword . '%')
                ->get();
        } else {
            $users = User::where('user_type', '<>', 'ADMIN')->get();
        }

        return view('page.public.search-users', [
            'users' => $users,
        ]);
    }
}
