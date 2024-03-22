<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\AlertUserDeposit;
use App\Mail\ApprovedDeposit;
use App\Models\BalanceHistory;
use App\Models\TransactionHistory;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class OrdersController extends Controller
{
    //
    public function orders()
    {
        $transactions = auth()->user()->transactionHistory()->orderBy("id", "desc")->get();
        return View::make("account.your-orders", [
            'transactions' => $transactions
        ]);
    }
    public function earnings()
    {
        return View::make("account.earnings");
    }

    public function approve($trxId)
    {
        TransactionHistory::where("transaction_id", $trxId)->update(["status" => "approved"]);
        $transaction = TransactionHistory::where("transaction_id", $trxId)->first();
        $user = User::where("id", $transaction->user_id)->first();
        User::where("id", $transaction->user_id)->update(["balance" =>  $transaction->amount  + $user->balance]);
        User::where("id", $transaction->user_id)->update(["deposit" =>  $transaction->amount  + $user->deposit]);
        BalanceHistory::create([
            'user_id' => $user->id,
            'amount' => $transaction->amount
        ]);
        Mail::send(new ApprovedDeposit($user, $transaction));
        return redirect()->back()->with("success", "Transaction approved successfully");
    }
}
