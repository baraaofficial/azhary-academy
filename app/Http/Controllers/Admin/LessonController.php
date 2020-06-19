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

       // dd($request->all());

        $rules = [
            'title'          => 'required|min:3|max:199',
            'description'    => 'required|min:20|max:500',
            'video'          => 'required|min:5|max:500',
            'image'          => 'required|image|mimes:jpeg,bmp,png',


        ];
        $message = [
            // validation Name

            'title.required'     => 'عنوان الدرس مطلوب',
            'title.min'          => 'لابد ان يكون العنوان اكثر من 3 أحرف',
            'title.max'          => 'لابد أن يكون العنوان اقل من 199 حرف',

            // validation description
            'description.required'   => 'وصف الدوره مطلوب',
            'description.min'        => 'لابد ان يكون الصوف اكثر من 20 حرف',
            'description.max'        => 'لابد ان يكون الوصف اقل من 500 حرف',

            // validation images
            'image.required'         => 'صورة الدوره مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',


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
            $lessons->image = $path;
        }
        return redirect()->route('lessons.index')->with(['message' => 'تم الأنشاء بنجاح']);
    }



    public function show($id)
    {
        $model = Lesson::with('cat')->findOrFail($id);
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
