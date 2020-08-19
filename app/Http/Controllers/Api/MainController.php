<?php

namespace App\Http\Controllers\Api;

use App\Models\Calss;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\RequestLog;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function courses() {

        $courses = Course::orderBy('id', 'desc')->limit(100)->get();

        return responseJson(1, 'success',  $courses);
    }

    public function lessons(Request $request) {


        $lessons = Lesson::where(function ($query) use ($request) {
            if ($request->has('course_id')) {
                $query->where('course_id', $request->course_id);
            }

        })->get();


        return responseJson(1, 'success',  $lessons);

    }

    public function class(Request $request) {
        $course = Course::where(function ($query) use ($request) {
            if ($request->has('class_id'))
            {
                $query->where('class_id',$request->class_id);
            }
        })->get();

        return responseJson(1, 'success',  $course);
    }

    public function subjects(Request $request) {

        $course = Course::where(function ($query) use ($request) {
            if ($request->has('subject_id'))
            {
                $query->where('subject_id',$request->subject_id);
            }
        })->orderBy('id', 'desc')->limit(100)->get();

        return responseJson(1, 'success',  $course);

    }


    public function getsubjects(Request $request) {

        $get_subjects = Subject::orderBy('id', 'desc')->limit(100)->get();

        return responseJson(1, 'success',  $get_subjects);

    }

    public function getclass(Request $request) {

        $get_class = Calss::all();

        return responseJson(1, 'success',  $get_class);

    }
    public function teacher(Request $request) {
        $course = Course::where(function ($query) use ($request) {
            if ($request->has('teacher_id'))
            {
                $query->where('teacher_id',$request->teacher_id);
            }
        })->get();

        return responseJson(1, 'success',  $course);

    }
    public function category(Request $request) {
        $course = Course::where(function ($query) use ($request) {
            if ($request->has('category'))
            {
                $query->where('category',$request->category);
            }
        })->get();

        return responseJson(1, 'success',  $course);

    }

    public function postFavourite(Request $request)
    {
        RequestLog::create(['content' => $request->all(), 'service' => 'Course toggle favourite']);
        $rules = [
            'course_id' => 'required|exists:courses,id',
        ];
        $validator = validator()->make($request->all(), $rules);

        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), $validator->errors());
        }

        $toggle = $request->user()->favourites()->toggle($request->course_id);

        return responseJson(1, 'Success', $toggle);
    }

    public function myFavourites(Request $request)
    {
        $courses = $request->user()->favourites()->latest()->paginate(20);// oldest()
        return responseJson(1, 'Loaded...', $courses);
    }

}
