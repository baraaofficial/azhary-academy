<?php

use Illuminate\Support\Facades\Auth;
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
    Route::resource('categories','CategoryController');
    Route::resource('about','AboutUsController');
    Route::resource('contact','ContactController');
    Route::resource('contactus','ContactUsController');
    Route::resource('users','UserController');

    Route::resource('questions', 'QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);

    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);

    Route::resource('teachers','TeachersController');
    Route::post('teachers_mass_destroy', ['uses' => 'TeachersController@massDestroy', 'as' => 'teachers.mass_destroy']);
    Route::resource('results', 'ResultsController');
    Route::post('results_mass_destroy', ['uses' => 'ResultsController@massDestroy', 'as' => 'results.mass_destroy']);

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

Route::get('profile', function () {
    return view('admin');

});
Route::group(['prefix' => 'courses'],function (){
    Route::get('/','GetCoursesController@index')->name('course.index');
    Route::get('/{id}','GetCoursesController@list')->name('course.list');
    Route::get('/lessons/{id}','LessonController@index')->name('lesson.single');

});

Route::get('/classroom','ClassroomController@index')->name('classroom.index');
Route::get('/teachers','TeachersController@index')->name('teacher.index');
Route::get('/subjects','SubjectController@index')->name('subject.index');
Route::get('/categories','CategoryController@index')->name('category.index');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/notifications', 'NotificationController@index')->name('notification');

Route::get('/auth/{provider}','AuthSocController@redirect');
Route::get('/auth/{provider}/callback','AuthSocController@Callback');


Route::middleware('auth')->group(function () {
    Route::post('comments/{id}', 'HomeController@commentUpdate')->name('comments.commentUpdate');
    Route::post('comments/{id}/create', 'HomeController@commentStore')->name('comments.commentStore');
    Route::get('comments/{id}', 'HomeController@commentDelete')->name('comment.delete');
    Route::get('profile/{id}/{slug?}', 'HomeController@profile')->name('profile.index');
    Route::post('profile', 'HomeController@profileUpdate')->name('profile.update');

});

Route::get('/search', 'SearchController@index')->name('search');
Route::get('/search/{search}', 'SearchController@index')->name('search.index');

Route::get('/about-us', 'AboutController@index')->name('about');
Route::resource('/contact-us', 'ContactUsController');
