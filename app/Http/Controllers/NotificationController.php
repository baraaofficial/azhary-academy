<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('notification',compact('courses'));
    }
}
