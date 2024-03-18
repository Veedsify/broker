<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    public function showLoginPage()
    {
        return View::make("login");
    }

    public function showRegisterPage()
    {
        return View::make("register");
    }
}
