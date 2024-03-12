<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    //
    public function history()
    {
        return view('account.withdraw-history');
    }
}
