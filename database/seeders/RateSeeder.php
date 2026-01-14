<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\Rate;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $courses = Course::all();
        $instructors = Instructor::all();

        Rate::factory()->count(10)->forCourse()->recycle($users)->recycle($courses)->create();
        Rate::factory()->count(10)->forInstructor()->recycle($users)->recycle($instructors)->create();
    }
}
