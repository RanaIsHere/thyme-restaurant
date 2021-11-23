<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function launchOrder()
    {
        return view('order', ['page' => 'Orders']);
    }
}
