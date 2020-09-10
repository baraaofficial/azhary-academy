<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = new User();
        $users->allOnline();
        return view('admin-panel.home',compact('users'));
    }
}
