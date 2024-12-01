<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Activity;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\UsersActivity;

class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'activity_id' => Activity::factory(),
            'content' => $this->faker->paragraphs(3, true),
            'rating' => $this->faker->numberBetween(-10000, 10000),
            'users_activity_id' => UsersActivity::factory(),
        ];
    }
}
