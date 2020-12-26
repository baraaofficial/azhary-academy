<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('admin-panel.tags.index',compact('tags'));
    }


    public function create()
    {
        return view('admin-panel.tags.create');
    }


    public function store(Request $request)
    {
        $rules = [
            'name'     => 'required|min:3|max:199',
        ];
        $message = [
            // validation Name

            'name.required'     => 'اسم الصف مطلوب',
            'name.min'          => 'يجب ان يكون الاسم اكثر من 3 أحرف',
            'name.max'          => 'يجب أن يكون الاسم اقل من 199 حرف',

        ];
        $this->validate($request, $rules,$message);

        $tags = Tag::create($request->all());

        return redirect(route('tags.index'))->with(['message' => 'تم إنشاء وسم '.' '.$tags->name .' '. ' الجديد بنجاح']);
    }


    public function show($id)
    {
        //
    }




    public function edit($id)
    {
        $model = Tag::findOrFail($id);
        return view('admin-panel.tags.edit', compact('model'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'name'     => 'required|min:3|max:199',
        ];
        $message = [
            // validation Name

            'name.required'     => 'اسم الصف مطلوب',
            'name.min'          => 'يجب ان يكون الاسم اكثر من 3 أحرف',
            'name.max'          => 'يجب أن يكون الاسم اقل من 199 حرف',

        ];
        $this->validate($request, $rules,$message);

        $tags = Tag::findOrFail($id);
        $tags->update($request->all());

        return redirect(route('tags.index'))->with(['message' => 'تم تعديل وسم '.' '.$tags->name .' '. ' بنجاح']);
    }


    public function destroy($id)
    {
        $tags = Tag::findOrFail($id);
        $tags->delete();

        return redirect(route('tags.index'))->with(['delete' => 'تم حذف وسم '.' '.$tags->name .' '. ' بنجاح']);
    }
}
