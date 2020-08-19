<?php

namespace App\Http\Controllers;

use App\Models\Calss;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {

        $courses = Course::all();
        $teachers = Teacher::all();
        return view('subject',compact('courses','teachers'));

    }
}
