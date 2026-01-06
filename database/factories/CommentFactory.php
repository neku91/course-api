<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text' => $this->faker->text(),
            'user_id' => User::factory(),
        ];
    }

    public function forInstructor(): static
    {
        return $this->state(fn (array $attributes) => [
            'commentable_id' => Instructor::factory(),
            'commentable_type' => (new Instructor)->getMorphClass(),
        ]);
    }

    public function forCourse(): static
    {
        return $this->state(fn (array $attributes) => [
            'commentable_id' => Course::factory(),
            'commentable_type' => (new Course)->getMorphClass(),
        ]);
    }
}
