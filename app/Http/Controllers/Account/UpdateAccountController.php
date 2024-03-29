<?php

namespace App\Http\Controllers\Account;

use App\Models\User;
use App\Mail\RegisterMailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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

    public function profileImage(Request $request)
    {
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);

        $user = User::find(auth()->id());
        $imageName = $user->username . "." . $request->image->extension();
        $request->image->move(public_path('custom/profiles'), $imageName);
        $user->avatar = 'custom/profiles/' . $imageName;
        $user->save();

        return redirect()->back()->with("success", "Profile image has been updated");
    }

    public function profileData(Request $request)
    {
        $request->validate([
            "firstname" => "required|string",
            "lastname" => "required|string",
            "phone" => "required|string",
            "zip" => "required|string",
            "numberprefix" => "required|string",
            "gender" => "required|string",
        ]);

        $user = User::find(auth()->id());
        $user->name = $request->firstname . " " . $request->lastname;
        $user->phone = $request->phone;
        $user->zip = $request->zip;
        $user->phoneprefix = $request->phoneprefix;
        $user->gender = $request->gender;
        $user->save();

        return redirect()->back()->with("success", "Profile data has been updated");
    }

    public function profilePassword(Request $request)
    {
        $request->validate([
            "old_password" => "required|string",
            "password" => "required|string|min:8",
        ]);

        $user = User::find(auth()->id());
        $hashed = Hash::check($request->old_password, $user->password);
        if (!$hashed) {
            return redirect()->back()->with("error", "Old password is incorrect");
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with("success", "Password has been updated");
    }
}
