<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = Instructor::all();
        $users = User::all();

        Course::factory()
            ->count(10)
            ->recycle($instructors)
            ->create()
            ->each(function ($course) use ($users) {
                $course->users()->attach(
                    $users->random(rand(1, 3)),
                    ['favorite' => rand(0, 1)]
                );
            });
    }
}
