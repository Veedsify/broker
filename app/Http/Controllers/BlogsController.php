<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function blogs()
    {
        return view('blogresource');
    }
    public function blogsDetail()
    {
        return view('blogdetails');
    }

    public function blogsCategory($categoryId)
    {
        return view('blogresource', [
            'category' => $categoryId
        ]);
    }
}
