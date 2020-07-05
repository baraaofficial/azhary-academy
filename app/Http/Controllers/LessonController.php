<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index($title, $slug = null) {

        $lessons = Lesson::where('title', $title)->firstOrFail();

        return view('lesson.single',compact('lessons'));

    }
}

