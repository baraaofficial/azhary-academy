<?php

namespace App\Http\Controllers\Admin;

use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function index()
    {
        $tests = Test::orderBy('id','desc')->paginate(20);
        return view('admin-panel.test.index',compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-panel.test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'question'    => 'required|min:20|max:500',
            'answer'      => 'required|min:20|max:500',


        ];
        $message = [
            // validation description
            'question.required'   => 'السؤال مطلوب',
            'question.min'        => 'يجب ان يكون السؤال اكثر من 20 حرف',
            'question.max'        => 'يجب ان يكون السؤال اقل من 500 حرف',

            // validation description
            'answer.required'   => 'السؤال مطلوب',
            'answer.min'        => 'يجب ان يكون الإختبار اكثر من 20 حرف',
            'answer.max'        => 'يجب ان يكون الإختبار اقل من 500 حرف',

        ];

        $this->validate($request, $rules,$message);

        $lessons = Test::create($request->all());



        return redirect()->route('tests.index')->with(['message' => 'تم إنشاء الإختبار بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Test::findOrFail($id);
        return  view('admin-panel.test.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'question'    => 'required|min:20|max:500',
            'answer'      => 'required|min:20|max:500',


        ];
        $message = [
            // validation description
            'question.required'   => 'السؤال مطلوب',
            'question.min'        => 'يجب ان يكون السؤال اكثر من 20 حرف',
            'question.max'        => 'يجب ان يكون السؤال اقل من 500 حرف',

            // validation description
            'answer.required'   => 'السؤال مطلوب',
            'answer.min'        => 'يجب ان يكون الإجابة اكثر من 20 حرف',
            'answer.max'        => 'يجب ان يكون الإجابة اقل من 500 حرف',

        ];

        $this->validate($request, $rules,$message);
        $test = Test::findOrFail($id);
        $test->update($request->all());


        return redirect()->route('tests.index')->with(['message' => 'تم تعديل الإختبار بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
