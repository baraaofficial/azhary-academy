<?php

namespace App\Http\Controllers\Api;

use App\Models\Calss;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function courses() {

        $courses = Course::limit(10)->get();

        return responseJson(1, 'نجح ي علاء ومتقاوحش',  $courses);
    }

    public function lessons(Request $request) {


        $lessons = Lesson::where(function ($query) use ($request) {
            if ($request->has('course_id','isFree')) {
                $query->where('course_id', $request->course_id);
                $query->where('1', $request->isFree);
            }

        })->get();


        return responseJson(1, 'نجح ي علاء ومتقاوحش',  $lessons);

    }

    public function class(Request $request) {
        $course = Course::where(function ($query) use ($request) {
            if ($request->has('class_id'))
            {
                $query->where('class_id',$request->class_id);
            }
        })->get();

        return responseJson(1, 'نجح ي علاء ومتقاوحش',  $course);
    }

    public function subjects(Request $request) {

        $course = Course::where(function ($query) use ($request) {
            if ($request->has('subject_id'))
            {
                $query->where('subject_id',$request->subject_id);
            }
        })->get();

        return responseJson(1, 'نجح ي علاء ومتقاوحش',  $course);

    }
    public function teacher(Request $request) {
        $course = Course::where(function ($query) use ($request) {
            if ($request->has('teacher_id'))
            {
                $query->where('teacher_id',$request->teacher_id);
            }
        })->get();

        return responseJson(1, 'نجح ي علاء ومتقاوحش',  $course);

    }
    public function category(Request $request) {
        $course = Course::where(function ($query) use ($request) {
            if ($request->has('category'))
            {
                $query->where('category',$request->category);
            }
        })->get();

        return responseJson(1, 'نجح ي علاء ومتقاوحش',  $course);

    }

}
