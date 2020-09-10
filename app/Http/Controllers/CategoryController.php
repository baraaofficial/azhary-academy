<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Course;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $courses = Course::all();

        $category = Categories::all();

        return view('category',compact('courses','category'));
    }
}
