<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function welcome(){
        return view ('welcomeL');
    }
     public function dashboard(){
        return Inertia::render('dashboard');
    }
}
