<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifestyleController extends Controller
{
    public function lifestyles() {
        return view('lifestyle');
    }
}
