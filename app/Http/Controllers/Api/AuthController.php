<?php

namespace App\Http\Controllers\Api;

use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'name'      => 'required|unique:users,name',
            'email'     => 'required|email:rfc,dns|unique:users,email',
            'phone'     => 'required|min:11|max:11',
            'gender'    => 'required',
            'calss_id'  => 'required|exists:App\Models\Calss,id',
            'password'  => 'required|confirmed|min:8',
        ]);
        if ($validator->fails()) {
            return responseJson(0,
                $validator->errors()->first(),
                $validator->errors());
        }
        $request->merge(['password' => bcrypt($request->password)]);
        $user = User::create($request->all());
        $user->api_token = Str::random(60);
        $user->save();

        return responseJson(1, ' تم الأضافة بنجاح ', [
            'api_token' => $user->api_token,
            'user'      => $user
        ]);
    }

    public function login(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'email'     => 'required',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), $validator->errors());
        }
        $users = User::where('email', $request->email)->first();
        if ($users) {

            if (Hash::check($request->password, $users->password)) {

                return responseJson(1, 'تم تسجيل الدخول بنجاح', [
                    'api_token' => $users->api_token,
                    'user'    => $users

                ]);
            } else {
                return responseJson(0, 'الرقم السري غير صحيح يرجي التأكد من البيانات والدخول مرة إخري');
            }
        } else {
            return responseJson(0, 'بيانات الدخول غير صحيحه يرجي التأكد من البيانات والدخول مرة إخري');
        }
    }

    public function profile(Request $request)
    {
        $user = $request->user();
        $validator = validator()->make($request->all(), [
            'email'    => Rule::unique('users', 'email')->ignore($user->id),
            'phone'    => 'integer|numeric|min:11|max:11',Rule::unique('users', 'phone')->ignore($user->id),
            'password' => 'confirmed',
            'bio'      => 'min:11|max:500'
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
        $user->update($request->only('name', 'email', 'phone','bio'));
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
        $user = User::where('phone', $request->phone)->first();
        //dd($user);
        if ($user) {
            $code = rand(1111, 9999);
            $update = $user->update(['pin_code' => $code]);
            if ($update)
            {
                /*   smsMisr($request->phone, "your reset code is : " . $code);
                   return responseJson(1, 'برجاء فحص هاتفك ..',['pin_code_for_test', $code]);*/

                Mail::to($user->email)
                    ->send(new ResetPassword($user));
                return responseJson(1, 'برجاء فحص هاتفك ..',
                    [
                        'pin_code_for_test' => $code,
                       // 'mail_fails' => Mail::failures(),
                        'email' => $user->email,

                    ]);
            } else{
                return responseJson(0,'حدث خطأ ، حاول مرة أخرى');
            }

        } else {
            //sms ... return responseJson(0, 'رقم الهاتف الذي أدخلته غير موجود');
            return responseJson(0, 'البريد الألكتروني الذي أدخلته غير موجود');

        }
    }


    public function newPassword(Request $request)
    {
        $validator = validator()->make($request->all(), [
            'pin_code' => 'numeric|required|min:4',
            'password' => 'required|confirmed',
        ]);
        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), $validator->errors());
        }
        $user = User::where('pin_code', $request->pin_code)->first();
        if ($user) {
            $user->update(['pin_code' => null, 'password' => bcrypt($request->password)]);
            return responseJson(1, 'تم تغيير كلمة المرور بنجاح',$user);
        } else {
            return responseJson(0, 'هذا الكود غير صالح');
        }
    }

    public function registerToken(Request $request)
    {
        $validation = validator()->make($request->all(), [
            'token' => 'required',
            'platform' => 'required|in:android,ios'

        ]);

        if ($validation->fails()) {
            $data = $validation->errors();
            return responseJson(0,$validation->errors()->first(),$data);
        }
        Token::where('token',$request->token)->delete();
        $request->user()->tokens()->create($request->all());
        return responseJson(1,'تم التسجيل بنجاح');
    }
}
