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

        Comment::factory()->count(10)->forCourse()->recycle($users)->recycle($courses)->create();
        Comment::factory()->count(10)->forInstructor()->recycle($users)->recycle($instructors)->create();
    }
}
