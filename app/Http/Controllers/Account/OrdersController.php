<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function allOrders()
    {
        return view('account.all-orders');
    }
    public function earnings()
    {
        return view('account.earning-orders');
    }
}
