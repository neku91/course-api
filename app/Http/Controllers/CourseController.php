<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Http\Resources\CourseResource;
use App\Http\Resources\InstructorResource;
use App\Models\Course;
use App\Models\Instructor;
use App\Services\CourseRatingService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;

class CourseController extends Controller
{
    protected CourseRatingService $ratingService;

    public function __construct(CourseRatingService $ratingService)
    {
        $this->ratingService = $ratingService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $perPage = 100;
        $courses = Course::with(['instructor', 'lessons', 'rates'])
            ->cursorPaginate($perPage);
        $coursesResource = CourseResource::collection($courses);

        return $coursesResource
            ->additional(['status' => true, 'message' => 'success'])
            ->response()
            ->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseStoreRequest $request): JsonResponse
    {
        $validated = $request->validated();

        try {
            $course = Course::create($validated);
            $course->load('instructor');
            $courseResource = new CourseResource($course);

            return $courseResource
                ->additional(['status' => true, 'message' => 'success'])
                ->response()
                ->setStatusCode(201);
        } catch (\Exception $e) {
            \Log::error('Error in store function CourseController : '.$e->getMessage());

            return response()->json(['status' => false, 'message' => 'Server error'], 500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        try {
            $course = Course::with(['instructor', 'lessons.video', 'users', 'comments.user', 'rates.user'])
                ->findOrFail($id);
            $average = $this->ratingService->averageRating($course);

            $courseResource = new CourseResource($course);

            return $courseResource
                ->additional(['status' => true, 'message' => 'success', 'average' => $average])
                ->response()
                ->setStatusCode(200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['status' => false, 'message' => 'Course not found'], 404);
        } catch (\Exception $e) {
            \Log::error("Error in show function CourseController {$id}: ".$e->getMessage());

            return response()->json(['status' => false, 'message' => 'Server error'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseUpdateRequest $request, string $id): JsonResponse
    {

        $validated = $request->validated();

        try {
            $course = Course::findOrFail($id);
            $course->update($validated);
            $course->refresh();
            $course->load(['instructor']);
            $courseResource = new CourseResource($course);

            return $courseResource
                ->additional(['status' => true, 'message' => 'success'])
                ->response()
                ->setStatusCode(200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['status' => false, 'message' => 'Course not found'], 404);
        } catch (\Exception $e) {
            \Log::error('Error in update function CourseController : '.$e->getMessage());

            return response()->json(['status' => false, 'message' => 'Server error'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $course = Course::findOrFail($id);
            $course->delete();

            return response()->json(['status' => true, 'message' => 'success'], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['status' => false, 'message' => 'Course not found'], 404);
        } catch (\Exception $e) {
            \Log::error("Error in destroy function CourseController {$id}: ".$e->getMessage());

            return response()->json(['status' => false, 'message' => 'Server error'], 500);
        }

    }

    public function instructorList(): JsonResponse
    {
        $perPage = 100;
        $instructors = Instructor::select('id', 'name', 'email')
            ->orderBy('name')
            ->cursorPaginate($perPage);
        $instructorsResource = InstructorResource::collection($instructors);

        return $instructorsResource
            ->additional(['status' => true, 'message' => 'success'])
            ->response()
            ->setStatusCode(200);
    }
}
