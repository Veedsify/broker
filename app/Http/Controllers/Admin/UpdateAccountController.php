<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class UpdateAccountController extends Controller
{
    //
    public function security()
    {
        return View::make("admin.security");
    }
    public function changePassword()
    {
        return View::make("admin.change-password");
    }
}
