<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Services\CourseRatingService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Course
 *
 * @property \App\Models\Course $resource
 */
class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $ratingService = app(CourseRatingService::class);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'average_rating' => $ratingService->averageRating($this->resource),
            'instructor' => new InstructorResource($this->whenLoaded('instructor')),
            'lessons' => LessonResource::collection($this->whenLoaded('lessons')),
            'users' => UserResource::collection($this->whenLoaded('users')),
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'rates' => RateResource::collection($this->whenLoaded('rates')),
        ];
    }
}
