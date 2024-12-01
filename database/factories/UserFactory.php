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
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'date_of_birth' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'profile_picture' => null,
            'bio' => $this->faker->sentence(),
            'skills' => $this->faker->words(3, true),
            'interests' => $this->faker->words(3, true),
            'role' => $this->faker->randomElement(['admin', 'relawan', 'organisasi']),
            // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
