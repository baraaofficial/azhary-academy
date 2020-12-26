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
            'email'         => 'required|email|min:3|max:200',
            'phone'         => 'required|min:11|max:11',
            'message'       => 'required|min:3|max:2000',
            'subject'       => 'required|min:3|max:199',
        ];
        $message = [
            // validation email

            'email.required'     => 'البريد الألكتروني مطلوب',
            'email.email'        => 'يجب ان يكون بريد إلكتروني حقيقي',
            'email.min'          => 'يجب ان يكون عنوان البريد الإلكتروني اكثر من 3 أحرف',
            'email.max'          => 'يجب أن يكون عنوان البريد الإلكتروني اقل من 200 حرف',

            // validation phone

            'phone.required'     => 'رقم الموبايل مطلوب',
            'phone.min'          => 'يجب ان يكون رقم الموبايل لا يزيد ولا يقل عن 11 أحرف ويكون رقم صحيح',
            'phone.max'          => 'يجب أن يكون رقم الموبايل لا يزيد ولا يقل عن 11 حرف ويكون رقم صحيح',

            // validation message

            'message.required'     => 'محتوي الرسالة مطلوب',
            'message.min'          => 'يجب ان تكون محتوي الرساله اكثر من 3 أحرف',
            'message.max'          => 'يجب أن تكون محتوي الرساله اقل من 199 حرف',


            // validation subject

            'subject.required'     => 'موضوع الرسالة مطلوب',
            'subject.min'          => 'يجب ان يكون موضوع الرسالة اكثر من 3 أحرف',
            'subject.max'          => 'يجب أن يكون موضوع الرسالة اقل من 300 حرف',



        ];
        $this->validate($request, $rules,$message);

        $contact = Contact_us::create($request->all());


        return redirect()->route('contact-us.index')->with(['message' => 'تم إرسال الرسالة بنجاح، سيتم الرد فى غضون أيام إن شاء الله تعالى']);

    }
}
