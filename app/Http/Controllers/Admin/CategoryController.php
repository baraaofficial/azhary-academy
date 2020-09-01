<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Categories::all();
        return view('admin-panel.categories.index',compact('categories'));
    }


    public function create()
    {
        return view('admin-panel.categories.create');

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

        $categories = Categories::create($request->all());
        return redirect()->route('categories.index')->with(['message' => 'تم إنشاء قسم'  .' '. $categories->name .' ' . ' بنجاح ']);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $model = Categories::findOrFail($id);
        return view('admin-panel.categories.edit', compact('model'));
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

        $categories = categories::findOrFail($id);
        $categories->update($request->all());

        return redirect()->route('categories.index')->with(['message' => 'تم تعديل دورة' .' '. $categories->name .' ' . ' بنجاح ']);
    }

    public function destroy($id)
    {
        $categories = categories::findOrFail($id);
        $categories->delete();

        return redirect(route('categories.index'))->with(['delete' => ' تم حذف ' . ' ' .  $categories->name . ' ' . ' بنجاح ']);
    }

    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = categories::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
