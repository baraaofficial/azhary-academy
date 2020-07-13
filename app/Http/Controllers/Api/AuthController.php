<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'name'      => 'required|unique:clients,name',
            'email'     => 'required|unique:clients,email',
            'phone'     => 'required|min:11|max:11',
            'password'  => 'required|confirmed',
        ]);
        if ($validator->fails()) {
            return responseJson(0,
                $validator->errors()->first(),
                $validator->errors());
        }
        $request->merge(['password' => bcrypt($request->password)]);
        $client = Client::create($request->all());
        $client->api_token = str_random(60);
        $client->save();
        return responseJson(1, ' تم الأضافة بنجاح ', [
            'api_token' => $client->api_token,
            'client'    => $client
        ]);
    }

    public function login(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'name'     => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), $validator->errors());
        }
        $clients = Client::where('name', $request->name)->first();
        if ($clients) {

            if (Hash::check($request->password, $clients->password)) {

                return responseJson(1, 'تم تسجيل الدخول بنجاح', [
                    'api_token' => $clients->api_token,
                    'client'    => $clients

                ]);
            } else {
                return responseJson(0, 'بيانات الدخول غير صحيحه يرجي التأكد من البيانات والدخول مرة إخري');
            }
        } else {
            return responseJson(0, 'بيانات الدخول غير صحيحه يرجي التأكد من البيانات والدخول مرة إخري');
        }
    }

    public function profile(Request $request)
    {
        $user = $request->user();
        $validator = validator()->make($request->all(), [
            'email'    => Rule::unique('clients', 'email')->ignore($user->id),
            'name'     => Rule::unique('clients', 'name')->ignore($user->id),
            'phone'    => 'min:11|max:11',
            'password' => 'confirmed',
        ]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), $validator->errors());
        }
        if ($request->password) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                // The passwords match...
                $user->password = bcrypt($request->input('password'));
                $user->save();
            } else {
                return responseJson(0, 'كلمة المرور الحالية غير صحيحة');
            }

        }
        $user->update($request->only('name', 'email', 'phone', 'full_name', 'last_name'));
        return responseJson(1, 'تم التعديل بنجاح', $user);
    }

    public function resetPassword(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'phone'    => 'min:11|max:11',
        ]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), $validator->errors());
        }
        $user = Client::where('phone', $request->phone)->first();
        //dd($user);
        if ($user) {
            $code = rand(1111, 9999);
            $update = $user->update(['pin_code' => $code]);
            if ($update)
            {
                smsMisr($request->phone, "your reset code is : " . $code);

            } else {
                return responseJson(1, 'برجاء فحص الايميل الخاص بك', $code);
            }
       } else {
            return responseJson(0, 'رقم الهاتف الذي أدخلته غير موجود');
        }
    }


    public function newPassword(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'pin_code' => 'required|min:4',
            'password' => 'required|confirmed',
        ]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), $validator->errors());
        }
        $client = Client::where('pin_code', $request->pin_code)->first();
        if ($client) {
            $client->update(['pin_code' => null, 'password' => bcrypt($request->password)]);
            return responseJson(1, 'تم تغيير كلمة المرور بنجاح');
        } else {
            return responseJson(0, 'هذا الكود غير صالح');
        }
    }
}
