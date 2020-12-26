<?php

namespace App\Providers;

use App\Models\Calss;
use App\Models\CartCourse;
use App\Models\Categories;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Contact_us;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use App\Models\VisitorHome;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
       // Courses have to be registered
       view()->share('get_courses',Course::orderBy('id','desc')->latest()->limit(100)->get());
       view()->share('courses_home',Course::orderBy('id','desc')->latest()->limit(6)->get());
       view()->share('get_coursesh',Course::orderBy('id','desc')->latest()->limit(20)->get());
       view()->share('get_class',Calss::orderBy('id','desc')->get());
       view()->share('get_subject',Subject::orderBy('id','asc')->get());
       view()->share('subject_home',Subject::orderBy('id','asc')->limit(12)->get());
       view()->share('get_teacher',Teacher::orderBy('id','asc')->get());
       view()->share('teachers',Teacher::orderBy('id','asc')->limit(4)->get());
       view()->share('get_category',Categories::orderBy('id','asc')->get());
       view()->share('category_home',Categories::orderBy('id','asc')->limit(3)->get());
       view()->share('contact',Contact::orderBy('id','asc')->limit(1)->get());
       view()->share('get_users',User::orderBy('id','desc')->limit(8)->get());
       view()->share('get_message',Contact_us::where('is_read',0)->orderBy('id','desc')->limit(8)->get());

    }
}
