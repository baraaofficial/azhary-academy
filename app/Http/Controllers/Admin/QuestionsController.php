<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lesson;
use App\Models\Question;
use App\Models\QuestionsOption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $questions = Question::all();

        return view('admin-panel.questions.index', compact('questions'));
    }


    public function create()
    {
        $relations = [
            'lesson' => Lesson::get()->pluck('title', 'id')->prepend('من فضلك اختر', ''),
        ];

        $correct_options = [
            'option1' => 'Option #1',
            'option2' => 'Option #2',
            'option3' => 'Option #3',
            'option4' => 'Option #4',
            'option5' => 'Option #5'
        ];

        return view('admin-panel.questions.create', compact('correct_options') + $relations);
    }


    public function store(Request $request)
    {

        $question = Question::create($request->all());

        foreach ($request->input() as $key => $value) {
            if(strpos($key, 'option') !== false && $value != '') {
                $status = $request->input('correct') == $key ? 1 : 0;
                QuestionsOption::create([
                    'question_id' => $question->id,
                    'option'      => $value,
                    'correct'     => $status
                ]);
            }
        }

        return redirect()->route('questions.index');
    }



    public function edit($id)
    {
        $relations = [
            'lesson' => Lesson::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $question = Question::findOrFail($id);

        return view('admin-panel.questions.edit', compact('question') + $relations);
    }


    public function update(Request $request, $id)
    {
        $question = Question::findOrFail($id);
        $question->update($request->all());

        return redirect()->route('questions.index');
    }


    public function show($id)
    {
        $relations = [
            'lesson' => Lesson::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $question = Question::findOrFail($id);

        return view('admin-panel.questions.show', compact('question') + $relations);
    }



    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index');
    }


    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Question::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
