<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'status',
        'type',
        'payment_method',
        'transaction_id',
        'payment_details',
        'currency',
        'quantity'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
