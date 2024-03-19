<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Backend extends Controller
{
    public function dashboard()
    {
        return view("backend.dashboard");
    }
}
