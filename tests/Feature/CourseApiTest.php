<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Lesson;
use App\Models\Rate;
use App\Models\User;
use App\Models\Video;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CourseApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_all_courses(): void
    {
        Course::factory()->count(3)->create();

        $response = $this->getJson('/api/courses');

        $response->assertStatus(200);
        $response->assertJsonCount(3, 'data');
        $response->assertJson([
            'status' => true,
            'message' => 'success',
        ]);
        $response->assertJsonStructure([
            'status',
            'message',
            'data' => [
                '*' => [
                    'id',
                    'title',
                    'average_rating',
                    'instructor',
                    'lessons',
                    'rates',
                ],
            ],
            'links',
            'meta',
        ]);
    }

    public function test_can_create_a_course(): void
    {
        $instructor = Instructor::factory()->create();

        $data = [
            'title' => 'Nuevo curso de test',
            'instructor_id' => $instructor->id,
        ];

        $response = $this->postJson('/api/courses', $data);

        $response->assertStatus(201);
        $this->assertDatabaseHas('courses', $data);
        $response->assertJson([
            'status' => true,
            'message' => 'success',
        ]);

        $response->assertJsonStructure([
            'status',
            'message',
            'data' => [
                'id',
                'title',
                'average_rating',
                'instructor',
            ],
        ]);
    }

    public function test_store_validate_rules(): void
    {
        $response = $this->postJson('/api/courses', []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['title', 'instructor_id']);
        $response->assertJsonFragment([
            'The title field is required.',
        ]);
    }

    public function test_can_show_course_details(): void
    {
        $users = User::factory()->count(2)->create();

        $course = Course::factory()
            ->has(
                Instructor::factory()->count(1)
                    ->has(Comment::factory()->forInstructor()->recycle($users))
                    ->has(Rate::factory()->forInstructor()->recycle($users))
            )
            ->hasAttached($users->random(2), ['favorite' => rand(0, 1)])
            ->has(
                Lesson::factory()
                    ->count(2)
                    ->has(Video::factory()->count(1))
            )
            ->has(Comment::factory()->count(2)->recycle($users))
            ->has(Rate::factory()->count(2)->recycle($users))
            ->create();
        $id = $course->id;

        $response = $this->getJson("/api/courses/{$id}");

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'message' => 'success',
        ]);
        $response->assertJsonStructure([
            'status',
            'message',
            'data' => [
                'id',
                'title',
                'average_rating',
                'instructor',
                'lessons',
                'users',
                'comments',
                'rates',
            ],
        ]);
    }

    public function test_can_update_course(): void
    {
        $instructor = Instructor::factory()->create();
        $oldData = [
            'title' => 'Titulo anterior',
            'instructor_id' => $instructor->id,
        ];
        $course = Course::factory()->create($oldData);
        $id = $course->id;

        $newData = [
            'title' => 'Titulo nuevo',
            'instructor_id' => $instructor->id,
        ];

        $response = $this->putJson("/api/courses/{$id}", $newData);

        $response->assertStatus(200);
        $this->assertDatabaseHas('courses', [
            'id' => $id,
            ...$newData,
        ]);
        $this->assertDatabaseMissing('courses', $oldData);
        $response->assertJson([
            'status' => true,
            'message' => 'success',
            'data' => [
                'id' => $id,
                'title' => $newData['title'],
                'instructor' => [
                    'id' => $instructor->id,
                    'name' => $instructor->name,
                    'email' => $instructor->email,
                ],
            ],
        ]);
        $response->assertJsonStructure([
            'data' => ['average_rating'],
        ]);
    }

    public function test_can_delete_course(): void
    {
        $course = Course::factory()->create();
        $id = $course->id;

        $response = $this->deleteJson("/api/courses/$id");

        $response->assertStatus(200);
        $response->assertJson([
            'status' => true,
            'message' => 'success',
        ]);
        $this->assertDatabaseMissing('courses', ['id' => $id]);

    }

    public function test_can_get_all_instructors(): void
    {
        Instructor::factory()->count(3)->create();

        $response = $this->getJson('/api/courses/instructors');

        $response->assertStatus(200);
        $response->assertJsonCount(3, 'data');
        $response->assertJson([
            'status' => true,
            'message' => 'success',
        ]);
        $response->assertJsonStructure([
            'status',
            'message',
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'email',
                ],
            ],
            'links',
            'meta',
        ]);
    }
}
