<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TierController extends Controller
{
    public function tiers($id)
    {
        return view('account.tiers', [
            'id' => $id
        ]);
    }
}
