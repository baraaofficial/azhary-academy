<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::namespace('Admin')->middleware('auth','admin')->prefix('dashboard')->group(function (){

    Route::get('/','HomeController@index');
    Route::resource('courses','CoursesController');
    Route::resource('class','ClassController');
    Route::resource('subjects','SubjectController');
    Route::resource('tags','TagController');
    Route::resource('lessons','LessonController');
    Route::resource('tests','TestController');

});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');

});

Route::get('single', function () {
    return view('lesson.single');

});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/{provider}','AuthSocController@redirect');
Route::get('/auth/{provider}/callback','AuthSocController@Callback');
