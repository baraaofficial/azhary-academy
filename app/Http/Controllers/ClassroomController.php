<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {

        $courses = Course::all();
        return view('classroom',compact('courses'));

    }
}
