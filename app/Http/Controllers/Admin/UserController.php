<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin-panel.users.index',compact('users'));
    }


    public function create()
    {
        return view('admin-panel.users.create');
    }


    public function store(Request $request)
    {
        $rules = [
            'name'           => 'required|string|min:3|max:40',
            'phone'          => 'required|string|max:255|unique:users',
            'email'          => 'required|string|email|max:255|unique:users',
            'password'       => 'required|string|min:8|confirmed',
        ];
        $message = [
            // validation Name

            'name.required'     => 'اسم العضو مطلوب',
            'name.min'          => 'يجب ان يكون الاسم اكثر من 3 أحرف',
            'name.max'          => 'يجب أن يكون الاسم اقل من 40 حرف',

            // validation email

            'email.required'     => 'البريد الألكترونى الخاص بالعضو مطلوب',
            'email.min'          => 'يجب ان يكون البريد الألكتروني اكثر من 3 أحرف',
            'email.email'          => 'يجب ان يكون البريد الألكتروني بريد إلكتروني حقيقي',
            'email.max'          => 'يجب أن يكون البريد الألكتروني اقل من 255 حرف',
            'email.unique'       => 'هذا البريد موجود بالفعل',

            // validation phone

            'phone.required'     => ' رقم العضو مطلوب',
            'phone.max'          => 'يجب أن يكون 255 رقم',
            'phone.unique'       => 'هذا البريد موجود بالفعل',

            // validation password

            'password.required'        => ' رقم العضو مطلوب',
            'password.min'             => 'يجب ان يكون كلمة السر اكثر من 3 أحرف',
            'password.confirmed'       => 'يجب ان يكون كلمة السر متطابقتين',



        ];


        $this->validate($request, $rules,$message);
        $request->merge(['password' => bcrypt($request->password)]);

        $users = User::create($request->all());

        $users->api_token = Str::random(60);
        $users->save();


        return redirect()->route('users.index')->with(['message' => 'تم إنشاء العضو'.' '.$users->name .' '. '  بنجاح']);

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $model = User::findOrFail($id);
        return view('admin-panel.users.edit',compact('model'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'name'           => 'required|string|min:3|max:40',
            'phone'          => 'string|max:255',
            'email'          => 'string|email|max:255',
        ];
        $message = [
            // validation Name

            'name.required'     => 'اسم العضو مطلوب',
            'name.min'          => 'يجب ان يكون الاسم اكثر من 3 أحرف',
            'name.max'          => 'يجب أن يكون الاسم اقل من 40 حرف',

            // validation email

            'email.min'          => 'يجب ان يكون البريد الألكتروني اكثر من 3 أحرف',
            'email.email'          => 'يجب ان يكون البريد الألكتروني بريد إلكتروني حقيقي',
            'email.max'          => 'يجب أن يكون البريد الألكتروني اقل من 255 حرف',

            // validation phone

            'phone.max'          => 'يجب أن يكون 255 رقم',



        ];


        $this->validate($request, $rules,$message);
        $request->merge(['password' => bcrypt($request->password)]);

        $users = User::findOrFail($id);
        $users->update($request->all());

        $users->api_token = Str::random(60);
        $users->save();


        return redirect()->route('users.index')->with(['message' => 'تم تعديل العضو'.' '.$users->name .' '. '  بنجاح']);

    }


    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect(route('users.index'))->with(['delete' => 'تم حذف العضو'.' '.$users->name .' '. ' بنجاح']);

    }
}
