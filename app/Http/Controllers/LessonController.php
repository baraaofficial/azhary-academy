<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\QuestionsOption;
use App\Models\Test;
use App\Models\TestAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $questions = Question::inRandomOrder()->where('lesson_id', $lessons->id)->limit(10)->get();
        foreach ($questions as &$question)
        {
            $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
        }
        return view('lesson.single',compact('lessons','comments','questions'));
    }

    public function store(Request $request)
    {
        $result = 0;

        $test = Test::create([
            'user_id' => Auth::id(),
            'result'  => $result,
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->correct
            ) {
                $status = 1;
                $result++;
            }
            TestAnswer::create([
                'user_id'     => Auth::id(),
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }

        $test->update(['result' => $result]);

        return redirect()->route('result.show', [$test->id]);
    }

    public function show($id)
    {
        $test = Test::find($id)->load('user');

        if ($test) {
            $results = TestAnswer::where('test_id', $id)
                ->with('question')
                ->with('question.options')
                ->get()
            ;
        }

        return view('lesson.show', compact('test', 'results'));
    }
}

