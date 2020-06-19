<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Cours;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{

    public function index()
    {
        $corses = Category::paginate(20);
        return view('admin-panel.lessons.index',compact('corses'));
    }


    public function create()
    {
        return view('admin-panel.lessons.create');
    }

    public function store(Request $request)
    {

    }



    public function show($id)
    {
        $model = Cours::with('cat')->findOrFail($id);
        return view('admin-panel.lessons.show',compact('model'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
