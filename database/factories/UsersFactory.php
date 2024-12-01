<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Users;

class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'password' => $this->faker->password(),
            'date_of_birth' => $this->faker->date(),
            'gender' => $this->faker->randomElement(["Laki-laki","Perempuan"]),
            'address' => $this->faker->text(),
            'phone_number' => $this->faker->phoneNumber(),
            'profile_picture' => $this->faker->text(),
            'bio' => $this->faker->text(),
            'skills' => $this->faker->text(),
            'interests' => $this->faker->text(),
            'role' => $this->faker->randomElement(["admin","relawan","organisasi"]),
        ];
    }
}
