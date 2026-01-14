<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = Lesson::all();

        foreach ($lessons as $lesson) {
            Video::factory()
                ->for($lesson)
                ->create();
        }
    }
}
