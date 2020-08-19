<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id, $slug = null) {

        $lessons = Lesson::where('id', $id)->firstOrFail();

        return view('lesson.single',compact('lessons'));

    }
}

