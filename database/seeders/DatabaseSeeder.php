<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Lesson;
use App\Models\Rate;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $users = User::factory()->count(20)->create();

        Instructor::factory()
            ->count(5)
            ->has(
                Course::factory()
                    ->count(10)
                    ->hasAttached($users->random(4), fn () => ['favorite' => rand(0, 1)])
                    ->has(
                        Lesson::factory()
                            ->count(5)
                            ->has(Video::factory()->count(1))
                    )
                    ->has(Comment::factory()->count(20)->recycle($users))
                    ->has(
                        Rate::factory()->count(20)->recycle($users))
            )
            ->has(Comment::factory()->forInstructor()->recycle($users))
            ->has(Rate::factory()->forInstructor()->recycle($users))
            ->create();
    }
}
