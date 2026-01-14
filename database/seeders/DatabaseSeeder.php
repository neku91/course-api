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

        /*
        $users = User::factory()->count(10)->create();

        Instructor::factory()
            ->count(5)
            ->has(
                Course::factory()
                    ->count(5)
                    ->hasAttached($users, fn() => ['favorite' => rand(0, 1)])->recycle($users)
                    ->has(
                        Lesson::factory()
                            ->count(10)
                            ->has(Video::factory()->count(1))
                    )
                    ->has(Comment::factory()->count(5)->forCourse()->recycle($users))
                    ->has(Rate::factory()->count(5)->forCourse()->recycle($users))
            )
            ->has(Comment::factory()->count(5)->forInstructor()->recycle($users))
            ->has(Rate::factory()->count(5)->forInstructor()->recycle($users))
            ->create();
        */

        $this->call([
            UserSeeder::class,
            InstructorSeeder::class,
            CourseSeeder::class,
            LessonSeeder::class,
            VideoSeeder::class,
            CommentSeeder::class,
            RateSeeder::class,
        ]);
    }
}
