<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
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
            'title'        => 'required|min:3|max:199',
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
            'title.max'          => 'لابد أن يكون العنوان اقل من 199 حرف',

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

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 398)->save( public_path('/uploads/aboutus/' . $filename ) );
            $about->image = $filename;
            $about->save();
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
            'title'        => 'required|min:3|max:199',
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
            'title.max'          => 'لابد أن يكون العنوان اقل من 199 حرف',

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

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 398)->save( public_path('/uploads/aboutus/' . $filename ) );
            $about->image = $filename;
            $about->save();
        }
        return redirect()->route('about.index')->with(['message' => 'تم تعديل حول الأكاديمية' .' '. $about->name .' ' . ' بنجاح ']);


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
}
