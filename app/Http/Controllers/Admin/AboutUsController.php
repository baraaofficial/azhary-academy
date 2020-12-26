<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AboutUsController extends Controller
{

    public function index()
    {
        $about_us = AboutUs::all();
        return view('admin-panel.aboutus.index',compact('about_us'));
    }


    public function create()
    {
        return view('admin-panel.aboutus.create');

    }


    public function store(Request $request)
    {

        $rules = [
            'title'        => 'required|min:3',
            'title1'       => 'required|min:3|max:199',
            'title2'       => 'required|min:3|max:199',
            'title3'       => 'required|min:3|max:199',


            'content1'     => 'required|min:20|max:300',
            'content2'     => 'required|min:20|max:300',
            'content3'     => 'required|min:20|max:300',

            'image'        => 'required',

        ];
        $message = [
            // validation title

            'title.required'     => 'عنوان حول الأكاديمية مطلوب',
            'title.min'          => 'لابد ان يكون العنوان اكثر من 3 أحرف',

            // validation title1

            'title1.required'     => 'عنوان حول الأكاديمية الفرعي الأول مطلوب',
            'title1.min'          => 'لابد ان يكون العنوان الفرعي الأول اكثر من 3 أحرف',
            'title1.max'          => 'لابد أن يكون العنوان الفرعي الأول اقل من 199 حرف',

            // validation title2

            'title2.required'     => 'عنوان حول الأكاديمية الفرعي الثاني مطلوب',
            'title2.min'          => 'لابد ان يكون العنوان الفرعي الثاني اكثر من 3 أحرف',
            'title2.max'          => 'لابد أن يكون العنوان الفرعي الثاني اقل من 199 حرف',


            // validation title3

            'title3.required'     => 'عنوان حول الأكاديمية الفرعي الثالث مطلوب',
            'title3.min'          => 'لابد ان يكون العنوان الفرعي الثالث اكثر من 3 أحرف',
            'title3.max'          => 'لابد أن يكون العنوان الفرعي الثالث اقل من 199 حرف',


            // validation content 1

            'content1.required'     => 'محتوي  حول الأكاديمية الفرعي الأول مطلوب',
            'content1.min'          => 'لابد ان يكون العنوان الفرعي الأول اكثر من 20 أحرف',
            'content1.max'          => 'لابد أن يكون العنوان الفرعي الأول اقل من 300 حرف',

            // validation content 2

            'content2.required'     => 'محتوي  حول الأكاديمية الفرعي الثاني مطلوب',
            'content2.min'          => 'لابد ان يكون العنوان الفرعي الثاني اكثر من 20 أحرف',
            'content2.max'          => 'لابد أن يكون العنوان الفرعي الثاني اقل من 300 حرف',

            // validation content 3

            'content3.required'     => 'محتوي  حول الأكاديمية الفرعي الثالث مطلوب',
            'content3.min'          => 'لابد ان يكون العنوان الفرعي الثالث اكثر من 20 أحرف',
            'content3.max'          => 'لابد أن يكون العنوان الفرعي الثالث اقل من 300 حرف',

            // validation images
            'image.required'         => 'صورة حول الأكاديمية مطلوبه',

        ];
        $this->validate($request, $rules,$message);

        $about = AboutUs::create($request->all());


        if ($request->hasFile('image')) {
            $this->addFile($request->file('image'), $about, 'aboutus', 'image');
        }

        return redirect()->route('about.index')->with(['message' => 'تم إنشاء حول الأكاديمية'  .' '. $about->name .' ' . ' بنجاح ']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $model = AboutUs::findOrFail($id);
        return view('admin-panel.aboutus.edit', compact('model'));
    }


    public function update(Request $request, $id)
    {

        $rules = [
            'title'        => 'required|min:3',
            'title1'       => 'required|min:3|max:199',
            'title2'       => 'required|min:3|max:199',
            'title3'       => 'required|min:3|max:199',


            'content1'     => 'required|min:20|max:300',
            'content2'     => 'required|min:20|max:300',
            'content3'     => 'required|min:20|max:300',

            'image'        => 'required',

        ];
        $message = [
            // validation title

            'title.required'     => 'عنوان حول الأكاديمية مطلوب',
            'title.min'          => 'لابد ان يكون العنوان اكثر من 3 أحرف',

            // validation title1

            'title1.required'     => 'عنوان حول الأكاديمية الفرعي الأول مطلوب',
            'title1.min'          => 'لابد ان يكون العنوان الفرعي الأول اكثر من 3 أحرف',
            'title1.max'          => 'لابد أن يكون العنوان الفرعي الأول اقل من 199 حرف',

            // validation title2

            'title2.required'     => 'عنوان حول الأكاديمية الفرعي الثاني مطلوب',
            'title2.min'          => 'لابد ان يكون العنوان الفرعي الثاني اكثر من 3 أحرف',
            'title2.max'          => 'لابد أن يكون العنوان الفرعي الثاني اقل من 199 حرف',


            // validation title3

            'title3.required'     => 'عنوان حول الأكاديمية الفرعي الثالث مطلوب',
            'title3.min'          => 'لابد ان يكون العنوان الفرعي الثالث اكثر من 3 أحرف',
            'title3.max'          => 'لابد أن يكون العنوان الفرعي الثالث اقل من 199 حرف',


            // validation content 1

            'content1.required'     => 'محتوي  حول الأكاديمية الفرعي الأول مطلوب',
            'content1.min'          => 'لابد ان يكون العنوان الفرعي الأول اكثر من 20 أحرف',
            'content1.max'          => 'لابد أن يكون العنوان الفرعي الأول اقل من 300 حرف',

            // validation content 2

            'content2.required'     => 'محتوي  حول الأكاديمية الفرعي الثاني مطلوب',
            'content2.min'          => 'لابد ان يكون العنوان الفرعي الثاني اكثر من 20 أحرف',
            'content2.max'          => 'لابد أن يكون العنوان الفرعي الثاني اقل من 300 حرف',

            // validation content 3

            'content3.required'     => 'محتوي  حول الأكاديمية الفرعي الثالث مطلوب',
            'content3.min'          => 'لابد ان يكون العنوان الفرعي الثالث اكثر من 20 أحرف',
            'content3.max'          => 'لابد أن يكون العنوان الفرعي الثالث اقل من 300 حرف',

            // validation images
            'image.required'         => 'صورة حول الأكاديمية مطلوبه',

        ];
        $this->validate($request, $rules,$message);

        $about = AboutUs::findOrFail($id);
        $about->update($request->all());

        if ($request->hasFile('image')) {
            $this->addFile($request->file('image'), $about, 'aboutus', 'image');
        }
        dd($request->all());

        return redirect()->route('about.index')->with(['message' => 'تم تعديل حول الأكاديمية' .' '. $about->title .' ' . ' بنجاح ']);
    }


    public function destroy($id)
    {
        $about = AboutUs::findOrFail($id);
        $about->delete();

        return redirect(route('about.index'))->with(['delete' => 'تم حذف حول الموقع بنجاح']);
    }

    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = AboutUs::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
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



}
