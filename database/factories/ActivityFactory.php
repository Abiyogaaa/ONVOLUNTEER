<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Activity;
use App\Models\Organization;

class ActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'organization_id' => Organization::factory(),
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'location' => $this->faker->text(),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'volunteer_needed' => $this->faker->numberBetween(-10000, 10000),
            'required_skills' => $this->faker->text(),
            'status' => $this->faker->randomElement(["aktif","selesai","batal"]),
        ];
    }
}
