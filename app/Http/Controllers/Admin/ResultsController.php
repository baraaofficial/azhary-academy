<?php

namespace App\Http\Controllers\Admin;

use App\Models\Test;
use App\Models\TestAnswer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResultsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('index', 'show');
    }


    public function index()
    {
        $results = Test::all()->load('user');

        if (!Auth::user()->isAdmin()) {
            $results = $results->where('user_id', '=', Auth::id());
        }

        return view('admin-panel.results.index', compact('results'));
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

        return view('admin-panel.results.show', compact('test', 'results'));
    }
}
