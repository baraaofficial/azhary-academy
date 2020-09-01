<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AzherController extends Controller
{
    public function index ($id)
    {
        return view($id);
    }
}
