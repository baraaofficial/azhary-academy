<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {

    //  Api auth controller
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('reset-password', 'AuthController@resetPassword');
    Route::post('new-password', 'AuthController@newPassword');

    Route::group(['middleware' => 'auth:api'], function () {

        //  Api main controller
        Route::get('courses', 'MainController@courses');
        Route::get('lessons', 'MainController@lessons');
        Route::get('class', 'MainController@class');
        Route::get('get-class', 'MainController@getclass');
        Route::get('subjects', 'MainController@subjects');
        Route::get('get-subjects', 'MainController@getsubjects');
        Route::get('teachers', 'MainController@teacher');
        Route::get('categories', 'MainController@category');
        Route::post('profile', 'AuthController@profile');
        Route::post('post-toggle-favourite','MainController@postFavourite');
        Route::get('my-favourites', 'MainController@myFavourites');

        Route::get('notifications-count', 'MainController@notificationsCount');
        Route::get('notifications', 'MainController@notifications');
        Route::post('register-token', 'AuthController@registerToken');

    });


});


