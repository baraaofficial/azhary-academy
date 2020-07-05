<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class GetCoursesController extends Controller
{
    public function index(){

        $courses = Course::all();

        return view('courses',compact('courses'));

    }

    public function list($name, $slug = null) {

        $course  = Course::where('name', $name)->with('lessons')->firstOrFail();
        $courses = Course::paginate(5);
        $cours   = Course::firstOrFail();

        return view('lesson.list',compact('course','courses','cours'));

    }

}
