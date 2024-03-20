<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class WalletController extends Controller
{
    //
    public function btc()
    {
        return View::make("admin.wallet-address-1");
    }
    public function eth()
    {
        return View::make("admin.wallet-address-2");
    }
}
