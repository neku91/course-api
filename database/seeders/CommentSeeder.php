<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $courses = Course::all();
        $instructors = Instructor::all();

        foreach ($courses as $course) {
            Comment::factory()
                ->count(10)
                ->recycle($users)
                ->create([
                    'commentable_id'   => $course->id,
                    'commentable_type' => $course->getMorphClass(),
                ]);
        }

        foreach ($instructors as $instructor) {
            Comment::factory()
                ->count(10)
                ->recycle($users)
                ->create([
                    'commentable_id'   => $instructor->id,
                    'commentable_type' => $instructor->getMorphClass(),
                ]);
        }
    }
}
