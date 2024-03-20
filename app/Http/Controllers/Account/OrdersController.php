<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class OrdersController extends Controller
{
    //
    public function orders()
    {
        return View::make("account.your-orders");
    }
    public function earnings()
    {
        return View::make("account.earnings");
    }

}
