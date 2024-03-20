<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    //
    public function users()
    {
        $allOtherUsers = User::where('role', '!=', 'admin')->orderBy('created_at', 'desc')->get();
        Log::info("All other users: " . $allOtherUsers);
        return View::make("admin.users", [
            'allOtherUsers' => $allOtherUsers
        ]);
    }
}
