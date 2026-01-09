<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Course;
use App\Models\Rate;
use App\Services\CourseRatingService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseRatingServiceTest extends TestCase
{
    use RefreshDatabase;

    private CourseRatingService $serviceRating;

    protected function setUp(): void
    {
        parent::setUp();
        $this->serviceRating = new CourseRatingService;
    }

    public function test_service_return_zero_if_no_rates_exist(): void
    {
        $course = Course::factory()->create();
        $average = $this->serviceRating->averageRating($course);

        $this->assertEquals(0.0, $average);
        $this->assertIsFloat($average);
    }

    public function test_service_calculates_average_correctly(): void
    {
        $course = Course::factory()->create();

        Rate::factory()->create(['rateable_id' => $course->id, 'rateable_type' => Course::class, 'rate' => 5]);
        Rate::factory()->create(['rateable_id' => $course->id, 'rateable_type' => Course::class, 'rate' => 4]);
        Rate::factory()->create(['rateable_id' => $course->id, 'rateable_type' => Course::class, 'rate' => 3]);
        $average = $this->serviceRating->averageRating($course);

        $this->assertEquals(4, $average);

    }
}
