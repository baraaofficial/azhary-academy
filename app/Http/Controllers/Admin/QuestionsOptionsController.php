<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use App\Models\QuestionsOption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionsOptionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $questions_options = QuestionsOption::all();

        return view('admin-panel.questions_options.index', compact('questions_options'));
    }


    public function create()
    {
        $relations = [
            'questions' => Question::get()->pluck('question_text', 'id')->prepend('اختر من فضلك', ''),
        ];

        return view('admin-panel.questions_options.create', $relations);
    }


    public function store(Request $request)
    {
        QuestionsOption::create($request->all());

        return redirect()->route('questions_options.index');
    }


    public function edit($id)
    {
        $relations = [
            'questions' => Question::get()->pluck('question_text', 'id')->prepend('اختر من فضلك', ''),
        ];

        $questions_option = QuestionsOption::findOrFail($id);

        return view('admin-panel.questions_options.edit', compact('questions_option') + $relations);
    }


    public function update(Request $request, $id)
    {
        $questionsoption = QuestionsOption::findOrFail($id);
        $questionsoption->update($request->all());

        return redirect()->route('questions_options.index');
    }


    public function show($id)
    {
        $relations = [
            'questions' => Question::get()->pluck('question_text', 'id')->prepend('اختر من فضلك', ''),
        ];

        $questions_option = QuestionsOption::findOrFail($id);

        return view('admin-panel.questions_options.show', compact('questions_option') + $relations);
    }


    public function destroy($id)
    {
        $questionsoption = QuestionsOption::findOrFail($id);
        $questionsoption->delete();

        return redirect()->route('questions_options.index');
    }


    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = QuestionsOption::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
