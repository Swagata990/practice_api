<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AcademicClassCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
            'data' => AcademicClassResource::collection($this->collection),
        ];
    }

    public function with(Request $request): array
    {
        return [
            'status' => true,
            'message' => 'Academic classes fetched successfully',
            'count' => $this->collection->count(),
        ];
    }
}
