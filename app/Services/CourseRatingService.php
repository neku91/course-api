<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Course;

class CourseRatingService
{
    /**
     * Create a new class instance.
     */
    public function __construct() {}

    public function averageRating(Course $course): float
    {
        $average = $course->rates()->avg('rate');

        return round((float) ($average ?? 0.0), 1);
    }
}
