<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TierController extends Controller
{
    public function tiers($id)
    {
        if (strtolower($id) === "amateur") {
            $min = 1000;
            $max = 5000;
        } else if (strtolower($id) === "starter") {
            $min = 5000;
            $max = 10000;
        } else if (strtolower($id) === "enterprise") {
            $min = 10000;
            $max = 50000;
        } else if (strtolower($id) === "gold") {
            $min = 50000;
            $max = 100000000;
        } else {
            return redirect()->route("account.deposit");
        }
        return view('account.tiers', [
            'id' => $id,
            'min' => $min,
            'max' => $max
        ]);
    }
}
