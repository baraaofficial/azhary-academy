<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CartCourse;
use Illuminate\Http\Request;

class CartCourseUser extends Controller
{
    public function create()
    {
        return view('admin-panel.cart_course_user.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'course_id'     => 'required',
            'user_id'     => 'required',
        ];
        $message = [
            // validation Name

            'course_id.required'     => ' اختيار الدورة مطلوب',
            'user_id.required'     => 'اختيار المستخدم مطلوب',

        ];
        $this->validate($request, $rules,$message);


        $payment = CartCourse::create($request->all());
        return redirect()->route('payment.create')->with(['message' => 'تم إنشاء الدفع اليدوي بنجاح']);
    }
}
