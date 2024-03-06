<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwapController extends Controller
{
    //
    public function swap()
    {
        return view('swap');
    }
    public function swapDetails($swapId)
    {
        return view('swap-checkout');
    }
}
