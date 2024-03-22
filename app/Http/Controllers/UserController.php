<?php

namespace App\Http\Controllers;

use App\Models\BalanceHistory;
use App\Models\DepositHistory;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function setUserData(Request $request, $id)
    {
        try {
            $user = User::find($id);
            $user->balance = intval($request->balance);
            $user->trade = intval($request->trade);
            $user->deposit = intval($request->deposit);
            $user->profits = intval($request->profits);
            $user->save();

            return redirect()->back()->with("success", "User data updated successfully");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "An error occurred while updating user data");
        }
    }
}
