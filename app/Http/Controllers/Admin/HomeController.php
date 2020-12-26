<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VisitorHome;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $visitors = VisitorHome::get();
        return view('admin-panel.home',compact('visitors'));
    }
}
