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

        $lessons = Lesson::findOrFail($id);
        $comments = $lessons->comments()->with('user' )->orderBy('id','Asc')->limit(30)->get();

        if($lessons->isFree == 0
//            && !$lessons->users()->find(auth()->user()->id)
        )
        {
            abort(404);
        }
        return view('lesson.single',compact('lessons','comments'));
    }
}

