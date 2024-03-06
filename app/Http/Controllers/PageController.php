<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function rewards(){
        return view('rewards');
    }
    public function terms(){
        return view('terms-conditaions');
    }
}
