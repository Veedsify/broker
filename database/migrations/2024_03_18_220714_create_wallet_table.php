<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('balance')->default(0);
            $table->string('status')->default('active');
            $table->string('tier')->default("basic");
            $table->string('currency')->default("USD");
            $table->integer('amount')->default(0);
            $table->string('deposit_currency')->default("BTC");
            $table->string('withdraw_currency')->default("BTC");
            $table->string('deposit_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet');
    }
};
