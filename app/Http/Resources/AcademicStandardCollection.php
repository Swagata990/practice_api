<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AcademicStandardCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
            'data' => AcademicStandardResource::collection($this->collection),
        ];
    }

    public function with(Request $request): array
    {
        return [
            'status' => true,
            'message' => 'Academic standards fetched successfully',
            'count' => $this->collection->count(),
        ];
    }
}
