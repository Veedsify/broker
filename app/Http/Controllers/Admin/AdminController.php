<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Admin;
use App\Mail\AdminMailer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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

    public function editUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route("admin.users");
        }
        $transactions = $user->transactionHistory->sortByDesc("id");
        return View::make("admin.edituser", [
            "user" => $user,
            'transactions' => $transactions
        ]);
    }
    public function editBalance($id)
    {
        return View::make("admin.editbalance", [
            "orders" => User::find($id)->transactionHistory()->count(),
            "user" => User::find($id)
        ]);
    }

    public function mails()
    {
        return View::make("admin.sendmail");
    }

    public function sendemail(Request $request)
    {
        try {
            $request->validate([
                'to' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            $data = [
                'to' => $request->to,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            Mail::to(trim($request->to))->send(new AdminMailer($data));
            return redirect()->route("admin.mails")->with("success", "Email sent successfully");
        } catch (\Exception $e) {
            Log::error("Error sending email: " . $e->getMessage());
            return redirect()->route("admin.mails")->with("error", "Error sending email");
        }
    }
}
