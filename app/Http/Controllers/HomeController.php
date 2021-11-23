<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function launchIndex()
    {
        return view('index', ['page' => 'Home']);
    }
}
