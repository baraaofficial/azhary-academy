<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LessonController extends Controller
{

    public function index()
    {
        $lessons = Lesson::orderBy('id','desc')->paginate(20);
        return view('admin-panel.lessons.index',compact('lessons'));
    }


    public function create()
    {
        return view('admin-panel.lessons.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title'          => 'required|min:3|max:199',
            'description'    => 'required|min:20',
            'video'          => 'required|min:5|max:500',
            'image'          => 'required|image|mimes:jpeg,bmp,png',
            'mb3'            => 'required',


        ];
        $message = [
            // validation Name

            'title.required'     => 'عنوان الدرس مطلوب',
            'title.min'          => 'يجب ان يكون العنوان اكثر من 3 أحرف',
            'title.max'          => 'يجب أن يكون العنوان اقل من 199 حرف',

            // validation description
            'description.required'   => 'وصف الدوره مطلوب',
            'description.min'        => 'يجب ان يكون الوصف اكثر من 20 حرف',

            // validation images
            'image.required'         => 'صورة الدوره مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',


            'mb3.required'         => 'التسجيل الدوره مطلوبه',



        ];

        $this->validate($request, $rules,$message);

        $lessons = Lesson::create($request->all());

        if ($request->file('image') != '') {
            Storage::delete($request->image);
            $path = $request->file('image')->store('public/lessons');
            $lessons->image = $path;
        }

        if ($request->file('pdf') != '') {
            Storage::delete($request->image);
            $path = $request->file('pdf')->store('public/lessons/pdf');
            $lessons->pdf = $path;
        }

        if ($request->hasFile('mp3') != '') {
            Storage::delete($request->image);
            $path = $request->file('mp3')->store('public/lessons/mp3');
            $lessons->mp3 = $path;
        }

        return redirect()->route('lessons.index')->with(['message' => 'تم إنشاء الدرس الجديد بنجاح']);
    }



    public function show($id)
    {
        $model = Lesson::with('cat')->findOrFail($id);
        return view('admin-panel.lessons.show',compact('model'));
    }


    public function edit($id)
    {
        $model = Lesson::findOrFail($id);
        return view('admin-panel.lessons.edit', compact('model'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'title'          => 'required|min:3|max:199',
            'description'    => 'required|min:20',
            'video'          => 'required|min:5|max:500',
            'image'          => 'required|image|mimes:jpeg,bmp,png',
            'mb3'            => 'required',


        ];
        $message = [
            // validation Name

            'title.required'     => 'عنوان الدرس مطلوب',
            'title.min'          => 'يجب ان يكون العنوان اكثر من 3 أحرف',
            'title.max'          => 'يجب أن يكون العنوان اقل من 199 حرف',

            // validation description
            'description.required'   => 'وصف الدوره مطلوب',
            'description.min'        => 'يجب ان يكون الوصف اكثر من 20 حرف',

            // validation images
            'image.required'         => 'صورة الدوره مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',


            'mb3.required'         => 'التسجيل الدوره مطلوبه',



        ];

        $this->validate($request, $rules,$message);

        $lessons = Lesson::findOrFail($id);
        $lessons->update($request->all());

        if ($request->file('image') != '') {
            Storage::delete($request->image);
            $path = $request->file('image')->store('public/lessons');
            $lessons->image = $path;
        }

        if ($request->file('pdf') != '') {
            Storage::delete($request->image);
            $path = $request->file('pdf')->store('public/lessons/pdf');
            $lessons->pdf = $path;
        }

        if ($request->file('mp3') != '') {
            Storage::delete($request->image);
            $path = $request->file('mp3')->store('public/lessons/mp3');
            $lessons->mp3 = $path;
        }

        return redirect()->route('lessons.index')->with(['message' => 'تم تعديل الدرس من جديد بنجاح']);
    }


    public function destroy($id)
    {
        $lessons = Lesson::findOrFail($id);
        $lessons->delete();

        return redirect(route('lessons.index'))->with(['delete' => 'تم حذف الدرس بنجاح']);
    }
}
