<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Provider;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthSocController extends Controller
{
    public function redirect($provider)
    {

        return Socialite::driver($provider)->redirect();
    }


    public function Callback($provider)
    {
        $user = Socialite::driver($provider)->user();


        $selectProvider = Provider::where('provider_id',$user->getId())->first();

        if (!$selectProvider){
            // new user
            $userGetRoal = User::where('email',$user->getEmail())->first();

            if (!$userGetRoal){
                $userGetRoal = new User();
                $userGetRoal->name = $user->getName();
                $userGetRoal->email = $user->getEmail();
                $userGetRoal->save();
            }
            $newProvider = new Provider();
            $newProvider->provider_id = $user->getId();
            $newProvider->provider = $provider;
            $newProvider->user_id = $userGetRoal->id;
            $newProvider->save();
        }else{
            // Login user
            $userGetRoal = User::find($selectProvider->user_id);
        }
        auth()->login($userGetRoal);
        return redirect('/');

    }

}
