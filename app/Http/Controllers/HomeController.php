<?php

namespace App\Http\Controllers;

use App\Models\ActionLogs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function launchIndex()
    {
        $actionlogs = ActionLogs::all();
        return view('index', ['page' => 'Home', 'actionlogs' => $actionlogs]);
    }
}
