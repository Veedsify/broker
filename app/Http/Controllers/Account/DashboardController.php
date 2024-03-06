<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return View::make('account.index');
    }

    public function profile()
    {
        return View::make('account.profile');
    }
}
