<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rate>
 */
class RateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rate' => $this->faker->randomFloat(2, 1, 5),
            'user_id' => User::factory(),
        ];
    }

    public function forInstructor(): static
    {
        return $this->state(fn (array $attributes) => [
            'rateable_id' => Instructor::factory(),
            'rateable_type' => (new Instructor)->getMorphClass(),
        ]);
    }

    public function forCourse(): static
    {
        return $this->state(fn (array $attributes) => [
            'rateable_id' => Course::factory(),
            'rateable_type' => (new Course)->getMorphClass(),
        ]);
    }
}
