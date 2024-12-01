<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Organization;
use App\Models\User;
use App\Models\Users;

class OrganizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organization::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'address' => $this->faker->text(),
            'phone_number' => $this->faker->phoneNumber(),
            'logo' => $this->faker->text(),
            'website' => $this->faker->word(),
            'activity_field' => $this->faker->word(),
            'users_id' => Users::factory(),
        ];
    }
}
