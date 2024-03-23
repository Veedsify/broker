<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\RegisterMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{

    public function showLoginPage()
    {
        if (Auth::check()) {
            return redirect()->route("account.index");
        }
        return View::make("login");
    }

    public function showRegisterPage()
    {
        return View::make("register");
    }

    public function registerNewUser(Request $request)
    {

        $request->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users,email",
            "username" => "string|unique:users,username",
            "phone" => "required|string",
            "password" => "required|string|min:8",
            "referral_code" => "string|nullable",
            "confirm_password" => "required|same:password"
        ]);

        try {
            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "username" => $request->username,
                "phone" => $request->phone,
                "password" => Hash::make($request->password),
                "email_verification_token" => Str::random(60),
                "referral_code" => isset($request->referral_code) ? $request->referral_code : NULL,
                "avatar" => asset("custom/images/placeholder.jpg")
            ]);;

            $user = User::where("email", $request->email)->first();
            session(["verification_code" => rand(100000, 999999)]);
            Mail::to($user->email)->send(new RegisterMailer($user, session()->has("verification_code") ? session("verification_code") : NULL));
            Auth::login($user, true);
            return redirect()->route("account.index");
        } catch (\Exception $e) {
            Log::info($e);
            return redirect()->back()->with("error", "Something went wrong, please try again");
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            "email" => "email",
            "phone" => "string",
            "password" => "required|string"
        ]);

        if ($request->input("email") && $request->input("phone") === null) {
            $user = User::where("email", $request->email)->first();
        } else if ($request->input("phone") && $request->input("email") === null) {
            $user = User::where("phone", $request->phone)->first();
        }

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user, true);
            return redirect()->route("account.index");
        } else {
            return redirect()->back()->with("error", "Invalid email or password");
        }
    }

    public function verifyToken(Request $request)
    {
        $request->validate([
            "code" => "required|array",
        ]);

        $verification_code = implode("", $request->code);
        if (intval($verification_code) == session("verification_code")) {
            $user = User::where("email", auth()->user()->email)->first();
            $user->email_verified_at = now();
            $user->email_verification_token = NULL;
            $user->save();
            return redirect()->route("account.index")->with("success", "Email verified successfully");
        } else {
            return redirect()->back()->with("error", "Invalid verification code");
        }
    }

    public function resendVerification()
    {
        if (auth()->user()->email_verified_at !== NULL) {
            return redirect()->route("account.index");
        }
        return View::make("resent");
    }
}
