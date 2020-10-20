<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Main Home Page
    public function index()
    {
        return view('home.index');
    }
}
