<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentSessionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => StudentSessionResource::collection($this->collection),
        ];
    }

    public function with(Request $request): array
    {
        return [
            'status' => true,
            'message' => 'Student Session fetched successfully',
            'count' => $this->collection->count(),
        ];
    }
}
