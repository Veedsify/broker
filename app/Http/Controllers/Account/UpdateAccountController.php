<?php

namespace App\Http\Controllers\Account;

use App\Mail\RegisterMailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;



class UpdateAccountController extends Controller
{
    //
    public function security()
    {
        return View::make("account.security");
    }

    public function changePassword()
    {
        return View::make("account.change-password");
    }

    public function resendVerification()
    {
        try {
            $user = auth()->user();
            session(["verification_code" => rand(100000, 999999)]);
            Mail::to($user->email)->send(new RegisterMailer($user, session()->has("verification_code") ? session("verification_code") : NULL));
            return redirect()->back()->with("success", "Verification email has been sent to your email address");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", "Please try again, Something went wrong");
        }
    }
}
