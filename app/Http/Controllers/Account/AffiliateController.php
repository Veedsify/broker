<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class AffiliateController extends Controller
{
    //
    public function affiliate()
    {
        return View::make("account.affiliate-program");
    }
}
