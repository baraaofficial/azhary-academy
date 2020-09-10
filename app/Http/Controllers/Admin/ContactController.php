<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        $contact = Contact::all();
        return view('admin-panel.contact.index',compact('contact'));
    }


    public function create()
    {
        return view('admin-panel.contact.create');

    }


    public function store(Request $request)
    {

        $rules = [
            'facebook'     => 'required|min:3|max:199',
            'twitter'     => 'required|min:3|max:199',
            'mail'     => 'required|min:3|max:199',
            'phone'     => 'required|min:3|max:199',
        ];
        $message = [
            // validation Facebook

            'facebook.required'     => 'عنوان الفيسبوك مطلوب',
            'facebook.min'          => 'لابد ان يكون عنوان الفيسبوك اكثر من 3 أحرف',
            'facebook.max'          => 'لابد أن يكون عنوان الفيسبوك اقل من 199 حرف',

            // validation Twitter

            'twitter.required'     => 'عنوان التويتر مطلوب',
            'twitter.min'          => 'لابد ان يكون عنوان التويتر اكثر من 3 أحرف',
            'twitter.max'          => 'لابد أن يكون عنوان التويتر اقل من 199 حرف',

            // validation Email

            'mail.required'     => 'عنوان البريد الألكتروني مطلوب',
            'mail.min'          => 'لابد ان يكون عنوان البريد الألكتروني اكثر من 3 أحرف',
            'mail.max'          => 'لابد أن يكون عنوان البريد الألكتروني اقل من 199 حرف',

            // validation Phone

            'phone.required'     => 'رقم موبايل الأكاديمية مطلوب',
            'phone.min'          => 'لابد ان يكون رقم موبايل الأكاديمية اكثر من 3 أحرف',
            'phone.max'          => 'لابد أن يكون رقم موبايل الأكاديمية اقل من 199 حرف',
        ];
        $this->validate($request, $rules,$message);

        $contact = Contact::create($request->all());
        return redirect()->route('contact.index')->with(['message' => 'تم إنشاء بيانات الأتصال الجديد بنجاح']);

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $model = Contact::findOrFail($id);
        return view('admin-panel.contact.edit', compact('model'));
    }


    public function update(Request $request, $id)
    {
        
        $rules = [
            'facebook'     => 'required|min:3|max:199',
            'twitter'     => 'required|min:3|max:199',
            'mail'     => 'required|min:3|max:199',
            'phone'     => 'required|min:3|max:199',
        ];
        $message = [
            // validation Facebook

            'facebook.required'     => 'عنوان الفيسبوك مطلوب',
            'facebook.min'          => 'لابد ان يكون عنوان الفيسبوك اكثر من 3 أحرف',
            'facebook.max'          => 'لابد أن يكون عنوان الفيسبوك اقل من 199 حرف',

            // validation Twitter

            'twitter.required'     => 'عنوان التويتر مطلوب',
            'twitter.min'          => 'لابد ان يكون عنوان التويتر اكثر من 3 أحرف',
            'twitter.max'          => 'لابد أن يكون عنوان التويتر اقل من 199 حرف',

            // validation Email

            'mail.required'     => 'عنوان البريد الألكتروني مطلوب',
            'mail.min'          => 'لابد ان يكون عنوان البريد الألكتروني اكثر من 3 أحرف',
            'mail.max'          => 'لابد أن يكون عنوان البريد الألكتروني اقل من 199 حرف',

            // validation Phone

            'phone.required'     => 'رقم موبايل الأكاديمية مطلوب',
            'phone.min'          => 'لابد ان يكون رقم موبايل الأكاديمية اكثر من 3 أحرف',
            'phone.max'          => 'لابد أن يكون رقم موبايل الأكاديمية اقل من 199 حرف',
        ];
        $this->validate($request, $rules,$message);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('contact.index')->with(['message' => 'تم تعديل بيانات الأتصال بنجاح']);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect(route('contact.index'))->with(['delete' => 'تم حذف بيانات الإتصال بنجاح']);

    }
}
