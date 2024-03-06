<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StakingController extends Controller
{
    //
    public function staking()
    {
        return view('staking');
    }
    public function stakingDetails($stakingId)
    {
        return view('staking-details');
    }
}
