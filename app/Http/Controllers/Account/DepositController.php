<?php

namespace App\Http\Controllers\Account;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TransactionHistory;
use App\Http\Controllers\Controller;
use App\Models\Activity;

class DepositController extends Controller
{
    //
    public function deposit()
    {
        return view('account.deposit');
    }

    public function confirm(Request $request)
    {

        if ($request->file('proof')) {
            $fileName = time() . '_' . $request->paidamount . '.' . $request->file('proof')->extension();
            $request->file('proof')->move(public_path('custom/proofs'), $fileName);
            $filePath = 'custom/proofs/' . $fileName;
        }

        $newTransaction = new TransactionHistory();
        $newTransaction->user_id = auth()->user()->id;
        $newTransaction->amount = $request->paidamount;
        $newTransaction->payment_method = $request->currency;
        $newTransaction->transaction_id = Str::random(32);
        $newTransaction->payment_details = $filePath ?? "Pament proof not provided";
        $newTransaction->currency = $request->currency;
        $newTransaction->quantity = $request->paidamount;
        $newTransaction->save();

        Activity::create([
            'name' => 'Deposit',
            'description' => 'Deposit of ' . $request->paidamount . ' ' . $request->currency,
            'user_id' => auth()->user()->id,
            'status' => 'active',
            'data' => json_encode([
                'amount' => $request->paidamount,
                'currency' => $request->currency,
                'quantity' => $request->paidamount,
                'transaction_id' => $newTransaction->transaction_id
            ])
        ]);

        User::where('id', auth()->user()->id)->update([
            "tier" => $request->tier
        ]);
        $trxid = TransactionHistory::where('id', $newTransaction->id)->first()->transaction_id;
        return redirect()->route('account.confirm-deposit',  $trxid);
    }

    public function confirm_page($id)
    {
        $transaction = TransactionHistory::where('transaction_id', $id)->first();
        if (!$transaction) {
            return redirect()->route('account.orders')->with('error', 'Transaction not found');
        }
        return view('account.confirm-deposit', [
            'transaction' => $transaction
        ]);
    }
}
