<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Lesson;
use App\NotificationHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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
            'description' => 'required|min:20',
            'video' => 'required|min:5|max:500',
            'image' => 'required|image|mimes:jpeg,bmp,png',
            'pdf' => 'required',


        ];
        $message = [
            // validation Name

            'title.required' => 'عنوان الدرس مطلوب',
            'title.min' => 'يجب ان يكون العنوان اكثر من 3 أحرف',
            'title.max' => 'يجب أن يكون العنوان اقل من 199 حرف',

            // validation description
            'description.required' => 'وصف الدرس مطلوب',
            'description.min' => 'يجب ان يكون الوصف اكثر من 20 حرف',

            // validation images
            'image.required' => 'صورة الدرس مطلوبه',
            'image.image' => 'يجب ان تكون صوره',
            'image.mimes' => 'يجب أن تكون jpeg,bmp,png',


            'pdf.required' => 'pdf الدرس مطلوبه',

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
            NotificationHelper::sendNotification($lessons, $usersIDs->pluck('id')->toArray(), 'users', optional($lessons->course)->name .'تم اضافة درس جديد لكورس', $lessons->title .' بعنوان '.optional($lessons->course)->name .' تم اضافة درس جديد لكورس  ', 'course', $lessons);
        }

        return redirect()->route('lessons.index')->with(['message' => 'تم انشاء درس' . ' ' . $lessons->title . ' ' . 'الجديد بنجاح']);
    }


    public function show($id)
    {
        $model = Lesson::with('cat')->findOrFail($id);
        return view('admin-panel.lessons.show', compact('model'));
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
            'description' => 'required|min:20',
            'video' => 'required|min:5|max:500',
            'image' => 'required|image|mimes:jpeg,bmp,png',
            'pdf' => 'required|mimes:pdf,xlx,csv|max:2048',


        ];
        $message = [
            // validation Name

            'title.required' => 'عنوان الدرس مطلوب',
            'title.min' => 'يجب ان يكون العنوان اكثر من 3 أحرف',
            'title.max' => 'يجب أن يكون العنوان اقل من 199 حرف',

            // validation description
            'description.required' => 'وصف الدرس مطلوب',
            'description.min' => 'يجب ان يكون الوصف اكثر من 20 حرف',

            // validation images
            'image.required' => 'صورة الدرس مطلوبه',
            'image.image' => 'يجب ان تكون صوره',
            'image.mimes' => 'يجب أن تكون jpeg,bmp,png',

            // validation images

            'pdf.required' => 'ملف الدرس مطلوب ',
            'pdf.max' => 'يجب ان لا يكون اكبر من 2048 ',
            'pdf.mimes' => 'يجب أن يكون pdf,xlx,csv',

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
            $this->updatePhoto($request->file('image'), $lessons, $model, 'lessons','','','');
        }

        if ($request->hasFile('pdf')) {
            $this->updatePhoto($request->file('pdf'), $lessons, 'pdf-lessons', 'pdf-lessons', false);
        }

        return redirect()->route('lessons.index')->with(['message' => 'تم تعديل درس' . ' ' . $lessons->title . ' ' . ' بنجاح']);
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
        $destinationPath = public_path() . '/uploads/' . $folderName . '/';
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


    /**
     * @param $file
     * @param $oldFiles
     * @param $model
     * @param $folderName
     * @param $relation
     * @param $image
     */
    public function updatePhoto($file, $oldFiles, $model, $folder_name, $relation = 'image', $usage = null, $type = true)
    {
        info("start");
        if ($oldFiles) {
            File::delete(public_path() . '/' . $oldFiles->path);
        }

        $image = $file;
        $destinationPath = public_path() . '/uploads/' . $folder_name . '/';
        $extension = $image->getClientOriginalExtension(); // getting image extension
        $name = 'original' . time() . '' . rand(11111, 99999) . '.' . $extension; // renaming image
        $image->move($destinationPath, $name); // uploading file to given

        if ($extension == 'svg') {
            $input =
                [
                    'name' => 'uploads/' . $folder_name . '/' . $name,
                    'type' => $type,
                    'usage' => $usage
                ];

            if ($oldFiles) {
                $model->$relation()->where(['type' => $type])->update($input);
            } else {

                $model->$relation()->create($input);
            }
            return true;
        }

        $image_400 = '400-' . time() . '' . rand(11111, 99999) . '.' . $extension;

        $resize_image = Image::make($destinationPath . $name);

        $resize_image->resize(400, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . $image_400, 100);

        $input =
            [
                'path' => 'uploads/' . $folder_name . '/' . $name,
                'type' => $type,
                'usage' => $usage,
            ];

        if ($oldFiles) {

            $oldFiles->update($input);

        } else {

            $model->$relation()->create($input);
        }

    }

    public function getDownload(Request $request)
    {

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download(public_path(). '/' .$request->path , $request->file_name  , $headers);
    }
}
