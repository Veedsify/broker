<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'balance',
        'status',
        'tier',
        'currency',
        'amount',
        'deposit_currency',
        'withdraw_currency',
        'deposit_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
