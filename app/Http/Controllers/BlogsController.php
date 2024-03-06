<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function blogs(){
        return view('blgoresource');
    }
    public function blogsDetail(){
        return view('blogdetails');
    }
}
