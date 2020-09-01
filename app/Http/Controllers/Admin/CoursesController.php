<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationOrder;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use App\NotificationHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CoursesController extends Controller
{

    public function index()
    {
        $courses = Course::all();
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
            'description'     => 'required|min:20|max:10000',
            'image'           => 'required|image|mimes:jpeg,bmp,png',
            'price'           => 'required',
        ];
        $message = [
            // validation Name
            'name.required'         => 'اسم الدروره مطلوب',
            'name.min'              => 'يجب ان يكون الاسم اكثر من 3 أحرف',
            'name.max'              => 'يجب أن يكون الاسم اقل من 199 حرف',


            // validation description
            'description.required'   => 'وصف الدوره مطلوب',
            'description.min'        => 'يجب ان يكون الصوف اكثر من 20 حرف',
            'description.max'        => 'يجب ان يكون الوصف اقل من 10000 حرف',


            // validation images
            'image.required'         => 'صورة الدوره مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',



            // validation price
            'price.required'         => 'سعر الدوره مطلوب',


        ];
        $this->validate($request, $rules,$message);


        $courses = Course::create($request->all());

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(720, 400)->save( public_path('/uploads/courses/' . $filename ) );
            $courses->image = $filename;
            $courses->save();
        }

        $courses->tags()->sync($request->tag_id);

        $courses->refresh();

        $usersIDs = $courses->class->users();

        if($usersIDs->count())
        {
            NotificationHelper::sendNotification($courses, $usersIDs->pluck('id')->toArray(), 'users', 'تم اضافة كورس جديد لصفك', ' تم اضافة كورس جديد لصفك', 'course', $courses);
        }

        return redirect()->route('courses.index')->with(['message' => 'تم إنشاء دورة'  .' '. $courses->name .' ' . ' بنجاح ']);


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
        $model = Course::findOrFail($id);
        return view('admin-panel.courses.edit', compact('model'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'name'           => 'required|min:3|max:199',
            'description'     => 'required|min:20|max:10000',
            'image'           => 'required|image|mimes:jpeg,bmp,png',
            'price'           => 'required',
        ];
        $message = [
            // validation Name
            'name.required'         => 'اسم الدروره مطلوب',
            'name.min'              => 'يجب ان يكون الاسم اكثر من 3 أحرف',
            'name.max'              => 'يجب أن يكون الاسم اقل من 199 حرف',


            // validation description
            'description.required'   => 'وصف الدوره مطلوب',
            'description.min'        => 'يجب ان يكون الصوف اكثر من 20 حرف',
            'description.max'        => 'يجب ان يكون الوصف اقل من 10000 حرف',


            // validation images
            'image.required'         => 'صورة الدوره مطلوبه',
            'image.image'            => 'يجب ان تكون صوره',
            'image.mimes'            => 'يجب أن تكون jpeg,bmp,png',

            // validation price
            'price.required'         => 'سعر الدوره مطلوب',


        ];
        $this->validate($request, $rules,$message);

        $courses = Course::findOrFail($id);
        $courses->update($request->all());

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(720, 400)->save( public_path('/uploads/courses/' . $filename ) );
            $courses->image = $filename;
            $courses->save();
        }

        $courses->tags()->sync($request->tag_id);


        return redirect()->route('courses.index')->with(['message' => 'تم تعديل دورة' .' '. $courses->name .' ' . ' بنجاح ']);

    }



    public function destroy($id)
    {
        $courses = Course::findOrFail($id);
        $courses->delete();

        return redirect(route('courses.index'))->with(['delete' => ' تم حذف ' . ' ' .  $courses->name . ' ' . ' بنجاح ']);
    }

    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Course::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


}
