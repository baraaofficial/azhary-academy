<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{

    public function index()
    {
        $courses = Category::all();
        return view('admin-panel.courses.index',compact('courses'));
    }


    public function create()
    {
        return view('admin-panel.courses.create');

    }


    public function store(Request $request)
    {
        $rules = [
            'name'           => 'required|min:3|max:199',
            'description'     => 'required|min:20|max:500',
            'image'           => 'required|image|mimes:jpeg,bmp,png',
            'category'        => 'required',
            'price'           => 'required',
        ];
        $message = [
            // validation Name
            'name.required'         => 'اسم الدروره مطلوب',
            'name.min'              => 'لابد ان يكون الاسم اكثر من 3 أحرف',
            'name.max'              => 'لابد أن يكون الاسم اقل من 199 حرف',


            // validation description
            'description.required'   => 'وصف الدوره مطلوب',
            'description.min'        => 'لابد ان يكون الصوف اكثر من 20 حرف',
            'description.max'        => 'لابد ان يكون الوصف اقل من 500 حرف',


            // validation images
            'image.required'         => 'صورة الدوره مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',


            // validation category
            'category.required'      => 'قسم الدوره مطلوب',


            // validation price
            'price.required'         => 'سعر الدوره مطلوب',


        ];
        $this->validate($request, $rules,$message);

        $courses = Category::create($request->all());

        if ($request->file('image') != '') {
            Storage::delete($request->image);
            $path = $request->file('image')->store('courses');
            $courses->image = $path;
        }

        $courses->tags()->sync($request->tag_id);


        return redirect()->route('courses.index')->with(['message' => 'تم إنشاء الدورة بنجاح']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }



    public function edit($id)
    {
        $model = Category::findOrFail($id);
        return view('admin-panel.courses.edit', compact('model'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'name'           => 'required|min:3|max:199',
            'description'     => 'required|min:20|max:500',
            'image'           => 'required|image|mimes:jpeg,bmp,png',
            'category'        => 'required',
            'price'           => 'required',
        ];
        $message = [
            // validation Name
            'name.required'         => 'اسم الدروره مطلوب',
            'name.min'              => 'لابد ان يكون الاسم اكثر من 3 أحرف',
            'name.max'              => 'لابد أن يكون الاسم اقل من 199 حرف',


            // validation description
            'description.required'   => 'وصف الدوره مطلوب',
            'description.min'        => 'لابد ان يكون الصوف اكثر من 20 حرف',
            'description.max'        => 'لابد ان يكون الوصف اقل من 500 حرف',


            // validation images
            'image.required'         => 'صورة الدوره مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',


            // validation category
            'category.required'      => 'قسم الدوره مطلوب',


            // validation price
            'price.required'         => 'سعر الدوره مطلوب',


        ];
        $this->validate($request, $rules,$message);

        $courses = Category::findOrFail($id);
        $courses->update($request->all());

        if ($request->file('image') != '') {
            Storage::delete($request->image);
            $path = $request->file('image')->store('public/courses');
            $courses->image = $path;
        }

        $courses->tags()->sync($request->tag_id);


        return redirect()->route('courses.index')->with(['message' => 'تم تعديل الدورة بنجاح']);

    }



    public function destroy($id)
    {
        $courses = Category::findOrFail($id);
        $courses->delete();

        return redirect(route('courses.index'))->with(['delete' => 'تم حذف الدورة بنجاح']);
    }
}
