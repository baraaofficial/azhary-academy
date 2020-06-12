<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{

    public function index()
    {
        $subjects = Subject::all();
        return view('admin-panel.subjects.index',compact('subjects'));
    }


    public function create()
    {
        return view('admin-panel.subjects.create');

    }


    public function store(Request $request)
    {
        $rules = [
            'name'     => 'required|min:3|max:199',
        ];
        $message = [
            // validation Name

            'name.required'     => 'اسم الصف مطلوب',
            'name.min'          => 'لابد ان يكون الاسم اكثر من 3 أحرف',
            'name.max'          => 'لابد أن يكون الاسم اقل من 199 حرف',
        ];
        $this->validate($request, $rules,$message);

        $subjects = Subject::create($request->all());
        return redirect()->route('subjects.index')->with(['message' => 'تم الأنشاء بنجاح']);
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


    public function edit($id)
    {
        $model = Subject::findOrFail($id);
        return view('admin-panel.subjects.edit', compact('model'));
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
            'name'     => 'required|min:3|max:199',
        ];
        $message = [
            // validation Name

            'name.required'     => 'اسم الصف مطلوب',
            'name.min'          => 'لابد ان يكون الاسم اكثر من 3 أحرف',
            'name.max'          => 'لابد أن يكون الاسم اقل من 199 حرف',

        ];
        $this->validate($request, $rules,$message);

        $subjects = Subject::findOrFail($id);
        $subjects->update($request->all());

        return redirect()->route('subjects.index')->with(['message' => 'تم تعديل المادة  بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subjects = Subject::findOrFail($id);
        $subjects->delete();

        return redirect(route('subjects.index'))->with(['delete' => 'تم حذف المادة بنجاح']);
    }
}
