<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ChatController extends Controller
{
    //
    public function chatBot()
    {
        return View::make("admin.chat");
    }
    public function contactRequest()
    {
        return View::make("admin.contact-request");
    }
}
