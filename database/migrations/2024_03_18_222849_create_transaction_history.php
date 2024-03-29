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
        Schema::create('transaction_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('amount');
            $table->string("transaction_id")->nullable();
            $table->string('status')->default('pending');
            $table->string('type')->default('deposit'); // deposit or withdrawal;
            $table->string('payment_method');
            $table->string('payment_details');
            $table->string('note')->nullable();
            $table->string('currency');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_history');
    }
};
