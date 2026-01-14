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

        foreach ($courses as $course) {
            Rate::factory()
                ->count(10)
                ->recycle($users)
                ->create([
                    'rateable_id'   => $course->id,
                    'rateable_type' => $course->getMorphClass(),
                ]);
        }

        foreach ($instructors as $instructor) {
            Rate::factory()
                ->count(10)
                ->recycle($users)
                ->create([
                    'rateable_id'   => $instructor->id,
                    'rateable_type' => $instructor->getMorphClass(),
                ]);
        }
    }
}
