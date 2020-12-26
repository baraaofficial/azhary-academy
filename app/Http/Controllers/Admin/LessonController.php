<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lesson;
use App\NotificationHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class LessonController extends Controller
{

    public function index()
    {
        $lessons = Lesson::orderBy('id', 'desc')->paginate(20);
        return view('admin-panel.lessons.index', compact('lessons'));
    }


    public function create()
    {
        return view('admin-panel.lessons.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|min:3|max:199',
            'video' => 'required|min:5|max:500',
            'image' => 'required|image|mimes:jpeg,bmp,png',


        ];
        $message = [
            // validation Name

            'title.required' => 'عنوان الدرس مطلوب',
            'title.min' => 'يجب ان يكون العنوان اكثر من 3 أحرف',
            'title.max' => 'يجب أن يكون العنوان اقل من 199 حرف',


            // validation images
            'image.required' => 'صورة الدرس مطلوبه',
            'image.image' => 'يجب ان تكون صوره',
            'image.mimes' => 'يجب أن تكون jpeg,bmp,png',

        ];

        $this->validate($request, $rules, $message);

        $lessons = Lesson::create($request->all());

        if ($request->hasFile('image')) {
            $this->addFile($request->file('image'), $lessons, 'lessons', 'image');
        }

        if ($request->hasFile('pdf')) {
            $this->addFile($request->file('pdf'), $lessons, 'pdf-lessons', 'pdf', false);
        }

        $usersIDs = $lessons->course->class->users();

        if($usersIDs->count())
        {
            NotificationHelper::sendNotification($lessons, $usersIDs->pluck('id')->toArray(), 'users', optional($lessons->course)->name .' تم اضافة درس جديد لدورة ', $lessons->title .' بعنوان '.optional($lessons->course)->name .' تم اضافة درس جديد لدورة ', ' course ', $lessons);
        }

        return redirect()->route('lessons.index')->with(['message' => 'تم انشاء درس' . ' ' . $lessons->title . ' ' . 'الجديد بنجاح']);
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $model = Lesson::findOrFail($id);
        return view('admin-panel.lessons.edit', compact('model'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required|min:3|max:199',
            'video' => 'required|min:5|max:500',


        ];
        $message = [
            // validation Name

            'title.required' => 'عنوان الدرس مطلوب',
            'title.min' => 'يجب ان يكون العنوان اكثر من 3 أحرف',
            'title.max' => 'يجب أن يكون العنوان اقل من 199 حرف',



        ];

        $this->validate($request, $rules, $message);

        $lessons = Lesson::findOrFail($id);
        $lessons->update($request->all());
        /**
         * @param $file
         * @param $oldFiles
         * @param $model
         * @param $folderName
         * @param $relation
         * @param $image
         */
        if ($request->hasFile('image')) {
            $this->addFile($request->file('image'), $lessons, 'lessons', 'image');
        }

        if ($request->hasFile('pdf')) {
            $this->addFile($request->file('pdf'), $lessons, 'pdf-lessons', 'pdf', false);
        }

        $usersIDs = $lessons->course->class->users();

        $courses->refresh();
        
        if($usersIDs->count())
        {
            NotificationHelper::sendNotification($lessons, $usersIDs->pluck('id')->toArray(), 'users', optional($lessons->course)->name .' تم تعديل الدرس لدورة ', $lessons->title .' بعنوان '.optional($lessons->course)->name .' تم تعديل الدرس لدورة ', 'course', $lessons);
        }

        return redirect()->route('courses.show',$lessons->course->id)->with(['message' => 'تم تعديل درس' . ' ' . $lessons->title . ' ' . ' بنجاح']);
    }


    public function destroy($id)
    {
        $lessons = Lesson::findOrFail($id);
        $lessons->delete();

        return redirect()->route('lessons.index')->with(['delete' => 'تم حذف درس' . ' ' . $lessons->title . ' ' . ' بنجاح']);

    }

    /**
     * @param $file
     * @param $model
     * @param $folderName
     * @param $colName
     * @param $image
     */
    public function addFile($file, $model, $folderName, $colName, $image = true): void
    {
        $destinationPath = 'uploads/' . $folderName . '/';
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


    public function getDownload(Request $request)
    {

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download(public_path(). '/' .$request->path , $request->file_name  , $headers);
    }
}
