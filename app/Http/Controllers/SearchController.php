<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $courses = Course::with('subject')->where(function($courses) use($request){

            if ($request->input('keyword'))
            {
                $courses->where(function($courses) use($request){
                    $courses->where('name','like','%'.$request->keyword.'%');
                    $courses->orWhere('description','like','%'.$request->keyword.'%');
                });
            }

        })->latest()->paginate(10);
        //   dd($request);
        return view('search',compact('courses'));
    }
}
