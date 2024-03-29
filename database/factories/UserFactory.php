<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => 'dikewisdom787@gmail.com',
            'username' => 'dikewisdom787',
            'email_verified_at' => now(),
            'user_id' => Str::random(10),
            'password' => static::$password ??= Hash::make('1234567890'),
            'phone' => fake()->phoneNumber(),
            'balance' => fake()->numberBetween(1000, 100000),
            'deposit' => fake()->numberBetween(1000, 100000),
            'trade' => fake()->numberBetween(1000, 100000),
            'avatar' => fake()->imageUrl(),
            'role' => 'admin',
            'status' => 'active',
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
