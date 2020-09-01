<?php

namespace App\Http\Controllers;

use App\Models\Calss;
use App\Models\Course;
use Illuminate\Http\Request;

class TeachersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {

        $courses = Course::all();
        $class = Calss::all();
        return view('teacher',compact('courses','class'));

    }
}
