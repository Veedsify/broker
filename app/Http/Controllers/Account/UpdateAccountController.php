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
       try{
            $user = auth()->user();
            Mail::to($user->email)->send(new RegisterMailer($user));
            return redirect()->route("resend.email.verification")->with("success", "Verification email has been sent to your email address");
       }catch(\Exception $e){
            return redirect()->back()->with("error", "Please try again, Something went wrong");
       }
    }
}
