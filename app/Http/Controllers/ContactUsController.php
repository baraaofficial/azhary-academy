<?php

namespace App\Http\Controllers;

use App\Models\Contact_us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function index() {
        return view('contactus');
    }

    public function create() {

        return view('contactus');
    }

    public function store(Request $request) {


        $rules = [
            'email'         => 'required|email|min:20|max:300',
            'phone'         => 'required|min:3|max:199',
            'message'       => 'required|min:3|max:2000',
            'subject'       => 'required|min:3|max:199',
        ];
        $message = [
            // validation email

            'email.required'     => 'البريد الألكتروني مطلوب',
            'email.min'          => 'يجب ان يكون بريد إلكتروني حقيقي',
            'title.min'          => 'يجب ان يكون ان يكون العنوان اكثر من 20 أحرف',
            'title.max'          => 'لابد أن يكون العنوان اقل من 300 حرف',

            // validation phone

            'phone.required'     => 'رقم الموبايل مطلوب',
            'phone.min'          => 'يجب ان يكون رقم الموبايل اكثر من 3 أحرف',
            'phone.max'          => 'يجب أن يكون رقم الموبايل اقل من 199 حرف',

            // validation message

            'message.required'     => 'محتوي الرسالة مطلوب',
            'message.min'          => 'يجب ان تكون محتوي الرساله اكثر من 3 أحرف',
            'message.max'          => 'يجب أن تكون محتوي الرساله اقل من 199 حرف',


            // validation subject

            'subject.required'     => 'موضوع الرسالة مطلوب',
            'subject.min'          => 'يجب ان يكون موضوع الرسالة اكثر من 20 أحرف',
            'subject.max'          => 'يجب أن يكون موضوع الرسالة اقل من 300 حرف',



        ];
        $this->validate($request, $rules,$message);

        $contact = Contact_us::create($request->all());


        return redirect()->route('contact-us.index')->with(['message' => 'تم إرسال الرسالة بنجاح، سيتم الرد فى غضون أيام إن شاء الله تعالى']);

    }
}
