<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calss;
use Illuminate\Http\Request;

class ClassController extends Controller
{

    public function index()
    {
        $class = Calss::all();
        return view('admin-panel.class.index',compact('class'));
    }


    public function create()
    {
        return view('admin-panel.class.create');
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

        $class = Calss::create($request->all());
        return redirect()->route('class.index')->with(['message' => 'تم إنشاء الصف الدراسي الجديد بنجاح']);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $model = Calss::findOrFail($id);
        return view('admin-panel.class.edit', compact('model'));
    }


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

        $class = Calss::findOrFail($id);
        $class->update($request->all());

        return redirect()->route('class.index')->with(['message' => 'تم تعديل الصف الدراسي بنجاح']);
    }


    public function destroy($id)
    {
        $class = Calss::findOrFail($id);
        $class->delete();

        return redirect(route('class.index'))->with(['delete' => 'تم حذف الصف الدراسي بنجاح']);
    }
}
