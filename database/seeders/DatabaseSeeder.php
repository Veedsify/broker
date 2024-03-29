<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();
        User::create([
            'name' => fake()->name(),
            'email' => 'Joeligben4@gmail.com',
            'username' => 'Joeligben4',
            'email_verified_at' => now(),
            'user_id' => Str::random(10),
            'password' => Hash::make('1234567890'),
            'phone' => fake()->phoneNumber(),
            'balance' => fake()->numberBetween(1000, 100000),
            'deposit' => fake()->numberBetween(1000, 100000),
            'trade' => fake()->numberBetween(1000, 100000),
            'avatar' => fake()->imageUrl(),
            'role' => 'admin',
            'status' => 'active',
            'remember_token' => Str::random(10),
        ]);
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
