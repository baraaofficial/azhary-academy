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

    Route::resource('questions', 'QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);

    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);

    Route::resource('teachers','TeachersController');
    Route::post('teachers_mass_destroy', ['uses' => 'TeachersController@massDestroy', 'as' => 'teachers.mass_destroy']);

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
Route::group(['prefix' => 'courses'],function (){
    Route::get('/','GetCoursesController@index')->name('course.index');
    Route::get('/{name}','GetCoursesController@list')->name('course.list');
    Route::get('/lessons/{title}','LessonController@index')->name('lesson.single');

});
Route::get('get-checkout-id','PaymentProviderController@getCheckOutId')->name('course.check');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notifications', 'NotificationController@index')->name('notification');

Route::get('/auth/{provider}','AuthSocController@redirect');
Route::get('/auth/{provider}/callback','AuthSocController@Callback');
