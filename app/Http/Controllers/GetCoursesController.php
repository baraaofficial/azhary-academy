<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\CartCourse;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class GetCoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $courses = Course::all();
        $subjects = Subject::all();
        Course::increment('visitor',1);

        return view('courses',compact('courses','subjects'));

    }
    public function list($id, $slug = null) {

        $course  = Course::where('id', $id)->firstOrFail();
        $payment = CartCourse::where('course_id', $id)->where('user_id', auth::user()->id)->whereHas('cart', function($q){
            return $q->where('paid', 1);
        })->count();

        if($payment){
            $lessons = $course->lessons()->get();

        } else {
            $lessons = $course->lessons()->where('isFree', 1)->get();
        }
        $coursesTag = Course::with('tags')->findOrFail($id);

        return view('lesson.list',compact('course','coursesTag', 'lessons','payment'));

    }

}
