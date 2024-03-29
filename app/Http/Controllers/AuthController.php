<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\RegisterMailer;
use Illuminate\Http\Request;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{


    public function forgotPassword()
    {
        return view('forgot');
    }

    public function showLoginPage()
    {
        if (Auth::check()) {
            return redirect()->route("account.index");
        }
        return View::make("login");
    }

    public function showRegisterPage()
    {
        $referal_code = request()->query("referral_code");
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
            "confirm_password" => "required|same:password"
        ]);

        if ($request->has("referral_code")) {
            $request->validate([
                "referral_code" => "exists:users,user_id"
            ]);
        }

        try {
            User::create([
                "name" => $request->name,
                "email" => $request->email,
                "username" => $request->username,
                "phone" => $request->phone,
                "password" => Hash::make($request->password),
                "email_verification_token" => Str::random(60),
                'user_id' => Str::random(10),
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
            if ($user->role == "admin") {
                return redirect()->route("admin");
            }
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

    public function sendResetLink(Request $request)
    {
        $request->validate([
            "email" => "required|email"
        ]);

        $user = User::where("email", $request->email)->first();
        if ($user) {
            $user->remember_token = Str::random(60);
            $user->save();
            Mail::to($user->email)->send(new ResetPassword($user));
            return redirect()->back()->with("success", "Password reset link sent to your email");
        } else {
            return redirect()->back()->with("error", "User" . $request->email . " not found");
        }
    }

    public function resetPassword($token)
    {
        $user = User::where("remember_token", $token)->first();
        if ($user) {
            return View::make("reset", ["user" => $user, "token" => $token]);
        } else {
            return redirect()->route("login")->with("error", "Invalid reset link");
        }
    }

    public function confirmReset(Request $request, $token)
    {
        $request->validate([
            "password" => "required|string|min:8",
            "confirm" => "required|same:password"
        ]);

        $user = User::where("remember_token", $token)->first();
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->remember_token = NULL;
            $user->save();
            return redirect()->route("login")->with("success", "Password reset successfully");
        } else {
            return redirect()->route("login")->with("error", "Invalid reset link");
        }
    }
}
