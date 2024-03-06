<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptoController extends Controller
{
    //
    public function buyCrypto()
    {
        return view('buycrypto');
    }
    public function price()
    {
        return view('pricing-plan');
    }
}
