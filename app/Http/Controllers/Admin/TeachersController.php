<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
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
            'description'    => 'required|min:3|max:199',
            'image'          => 'required|image|mimes:jpeg,bmp,png',
            'phone'          => 'min:11|max:11',
            

        ];
        $message = [
            // validation Name

            'name.required'     => 'اسم الصف مطلوب',
            'name.min'          => 'يجب ان يكون الاسم اكثر من 3 أحرف',
            'name.max'          => 'يجب أن يكون الاسم اقل من 40 حرف',


            // validation Description

            'description.required'     => 'وصف المدرس مطلوب',
            'description.min'          => 'يجب ان يكون الوصف اكثر من 3 أحرف',
            'description.max'          => 'يجب ان يكون الوصف أقل من 199 أحرف',


            // validation Images
            'image.required'         => 'صورة المدرس مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',

            // validation Phone

            'phone.required'     => ' رقم المدرس مطلوب',
            'phone.min'          => 'يجب ان يكون 11 رقم',
            'phone.max'          => 'يجب أن يكون11 رقم',

            ];


        $this->validate($request, $rules,$message);
        $teachers = Teacher::create($request->all());

        if ($request->hasFile('image')) {
            $this->addFile($request->file('image'), $teachers, 'teachers', 'image');
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
            'image'          => 'required|image|mimes:jpeg,bmp,png',
            'phone'          => 'required|min:11|max:11',
        ];
        $message = [
            // validation Name

            'name.required'     => 'اسم الصف مطلوب',
            'name.min'          => 'يجب ان يكون الاسم اكثر من 3 أحرف',
            'name.max'          => 'يجب أن يكون الاسم اقل من 40 حرف',


            // validation description

            'description.required'     => 'وصف المدرس مطلوب',
            'description.min'          => 'يجب ان يكون الوصف اكثر من 3 أحرف',


            // validation images
            'image.required'         => 'صورة المدرس مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',

            // validation phone

            'phone.required'     => ' رقم المدرس مطلوب',
            'phone.min'          => 'يجب ان يكون 11 رقم',
            'phone.max'          => 'يجب أن يكون11 رقم',

        ];


        $this->validate($request, $rules,$message);

        $teachers = Teacher::findOrFail($id);
        $teachers->update($request->all());

        if ($request->hasFile('image')) {
            $this->addFile($request->file('image'), $teachers, 'teachers', 'image');
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

    public function addFile($file, $model, $folderName, $colName, $image = true): void
    {
        $destinationPath =  'uploads/' . $folderName . '/';
        $extension = $file->getClientOriginalExtension();
        $name = 'original' . time() . '.' . rand(1111, 9999) . '.' . $extension;
        $file->move($destinationPath, $name);

        if ($image) {

            $image_400 = '400-' . time() . '' . rand(11111, 99999) . '.' . $extension;
            $resize_image = Image::make($destinationPath . $name);
            $resize_image->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . $image_400, 100);

            $path = '/uploads/' . $folderName . '/' . $image_400;
            File::delete($destinationPath.$name);

        } else {

            $path = '/uploads/' . $folderName . '/' . $name;
        }

        $model->$colName = $path;
        $model->save();
    }

}
