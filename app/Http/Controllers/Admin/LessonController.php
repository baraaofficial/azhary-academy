<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
            'pdf'            => 'required',


        ];
        $message = [
            // validation Name

            'title.required'     => 'عنوان الدرس مطلوب',
            'title.min'          => 'يجب ان يكون العنوان اكثر من 3 أحرف',
            'title.max'          => 'يجب أن يكون العنوان اقل من 199 حرف',

            // validation description
            'description.required'   => 'وصف الدرس مطلوب',
            'description.min'        => 'يجب ان يكون الوصف اكثر من 20 حرف',

            // validation images
            'image.required'         => 'صورة الدرس مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',


            'pdf.required'         => 'pdf الدرس مطلوبه',

        ];

        $this->validate($request, $rules,$message);

        $lessons = Lesson::create($request->all());


        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(720, 400)->save( public_path('/uploads/lessons/' . $filename ) );
            $lessons->image = $filename;
            $lessons->save();
        }

        if ($request->file('pdf') != '') {
            Storage::delete($request->pdf);
            $path = $request->file('pdf')->store('uploads/lessons/PDF');
            $lessons->pdf = $path;
        }
        $lessons->save();

        return redirect()->route('lessons.index')->with(['message' => 'تم انشاء درس'.' '.$lessons->title .' '. 'الجديد بنجاح']);
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
            'pdf'            => 'required|mimes:pdf,xlx,csv|max:2048',


        ];
        $message = [
            // validation Name

            'title.required'     => 'عنوان الدرس مطلوب',
            'title.min'          => 'يجب ان يكون العنوان اكثر من 3 أحرف',
            'title.max'          => 'يجب أن يكون العنوان اقل من 199 حرف',

            // validation description
            'description.required'   => 'وصف الدرس مطلوب',
            'description.min'        => 'يجب ان يكون الوصف اكثر من 20 حرف',

            // validation images
            'image.required'         => 'صورة الدرس مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',

            // validation images

            'pdf.required'         => 'ملف الدرس مطلوب ',
            'pdf.max'              => 'يجب ان لا يكون اكبر من 2048 ',
            'pdf.mimes'            => 'يجب أن يكون pdf,xlx,csv',

        ];

        $this->validate($request, $rules,$message);

        $lessons = Lesson::findOrFail($id);
        $lessons->update($request->all());

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(720, 400)->save( public_path('/uploads/lessons/' . $filename ) );
            $lessons->image = $filename;
            $lessons->save();
        }

        if ($request->file('pdf') != '') {
            Storage::delete($request->pdf);
            $path = $request->file('pdf')->store('uploads/lessons/PDF');
            $lessons->pdf = $path;
            $lessons->save();
        }



        return redirect()->route('lessons.index')->with(['message' => 'تم تعديل درس'.' '.$lessons->title .' '. ' بنجاح']);
    }


    public function destroy($id)
    {
        $lessons = Lesson::findOrFail($id);
        $lessons->delete();

        return redirect()->route('lessons.index')->with(['delete' => 'تم حذف درس'.' '.$lessons->title .' '. ' بنجاح']);

    }
}
