<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Activity;
use App\Models\ActivityRegistration;
use App\Models\User;
use App\Models\UsersActivity;

class ActivityRegistrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ActivityRegistration::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'activity_id' => Activity::factory(),
            'status' => $this->faker->randomElement(["pending","diterima","ditolak"]),
            'users_activity_id' => UsersActivity::factory(),
        ];
    }
}
