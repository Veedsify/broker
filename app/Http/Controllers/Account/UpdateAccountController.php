<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class UpdateAccountController extends Controller
{
    //
    public function security()
    {
        return View::make("account.security");
    }
    public function changePassword()
    {
        return View::make("account.change-password");
    }
}
