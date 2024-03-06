<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdoController extends Controller
{
    //
    public function ido()
    {
        return view('ido');
    }
    public function idoDetails($idoId)
    {
        return view('idodetails');
    }
}
