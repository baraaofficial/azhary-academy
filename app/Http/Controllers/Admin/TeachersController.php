<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TeachersController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all();
        return view('admin-panel.teachers.index', compact('teachers'));
    }


    public function create()
    {
        return view('admin-panel.teachers.create');
    }


    public function store(Request $request)
    {
        $rules = [
            'name'           => 'required|min:3|max:40',
            'description'    => 'required|min:3',
            'email'          => 'required|unique:teachers,email|min:3|max:50|',
            'image'          => 'required|image|mimes:jpeg,bmp,png',
            'phone'          => 'required|min:11|max:11',
            'school'         => 'required|min:3|max:20',


        ];
        $message = [
            // validation Name

            'name.required'     => 'اسم الصف مطلوب',
            'name.min'          => 'يجب ان يكون الاسم اكثر من 3 أحرف',
            'name.max'          => 'يجب أن يكون الاسم اقل من 40 حرف',


            // validation description

            'description.required'     => 'وصف المدرس مطلوب',
            'description.min'          => 'يجب ان يكون الوصف اكثر من 3 أحرف',

            // validation email

            'email.required'     => 'البريد الألكترونى الخاص بالمدرس مطلوب',
            'email.min'          => 'يجب ان يكون البريد الألكتروني اكثر من 3 أحرف',
            'email.max'          => 'يجب أن يكون البريد الألكتروني اقل من 50 حرف',
            'email.unique'       => 'هذا البريد موجود بالفعل',

            // validation images
            'image.required'         => 'صورة المدرس مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',

            // validation phone

            'phone.required'     => ' رقم المدرس مطلوب',
            'phone.min'          => 'يجب ان يكون 11 رقم',
            'phone.max'          => 'يجب أن يكون11 رقم',

            // validation school

            'school.required'     => 'المدرسة/المعهد الذي يعمل بها المدرس',
            'school.min'          => 'يجب ان تكون المدرسة اكثر من 3 أحرف',
            'school.max'          => 'يجب ان تكون المدرسة أقل من 20 حرف',
            ];


        $this->validate($request, $rules,$message);

        $teachers = Teacher::create($request->all());
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 398)->save( public_path('/uploads/teachers/' . $filename ) );
            $teachers->image = $filename;
            $teachers->save();
        }


        return redirect()->route('teachers.index')->with(['message' => 'تم إنشاء تعريف المدرس '.' '.$teachers->name .' '. ' الجديد بنجاح']);


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $model = Teacher::findOrFail($id);
        return view('admin-panel.teachers.edit',compact('model'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'name'           => 'required|min:3|max:40',
            'description'    => 'required|min:3',
            'email'          => 'required|min:3|max:50|',
            'image'          => 'required|image|mimes:jpeg,bmp,png',
            'phone'          => 'required|min:11|max:11',
            'school'         => 'required|min:3|max:20',


        ];
        $message = [
            // validation Name

            'name.required'     => 'اسم الصف مطلوب',
            'name.min'          => 'يجب ان يكون الاسم اكثر من 3 أحرف',
            'name.max'          => 'يجب أن يكون الاسم اقل من 40 حرف',


            // validation description

            'description.required'     => 'وصف المدرس مطلوب',
            'description.min'          => 'يجب ان يكون الوصف اكثر من 3 أحرف',

            // validation email

            'email.required'     => 'البريد الألكترونى الخاص بالمدرس مطلوب',
            'email.min'          => 'يجب ان يكون البريد الألكتروني اكثر من 3 أحرف',
            'email.max'          => 'يجب أن يكون البريد الألكتروني اقل من 50 حرف',


            // validation images
            'image.required'         => 'صورة المدرس مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',

            // validation phone

            'phone.required'     => ' رقم المدرس مطلوب',
            'phone.min'          => 'يجب ان يكون 11 رقم',
            'phone.max'          => 'يجب أن يكون11 رقم',

            // validation school

            'school.required'     => 'المدرسة/المعهد الذي يعمل بها المدرس',
            'school.min'          => 'يجب ان تكون المدرسة اكثر من 3 أحرف',
            'school.max'          => 'يجب ان تكون المدرسة أقل من 20 حرف',
        ];


        $this->validate($request, $rules,$message);

        $teachers = Teacher::findOrFail($id);
        $teachers->update($request->all());

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 398)->save( public_path('/uploads/teachers/' . $filename ) );
            $teachers->image = $filename;
            $teachers->save();
        }

        return redirect()->route('teachers.index')->with(['message' => 'تم تعديل تعريف المدرس '.' '.$teachers->name .' '. '  بنجاح']);

    }


    public function destroy($id)
    {
        $teachers = Teacher::findOrFail($id);
        $teachers->delete();
        return redirect()->route('teachers.index')->with(['delete' => 'تم حذف تعريف المدرس '.' '.$teachers->name .' '. '  بنجاح']);

    }

    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Teacher::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
