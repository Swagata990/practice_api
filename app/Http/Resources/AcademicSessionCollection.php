<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AcademicSessionCollection extends ResourceCollection
{
    public function toArray(Request $request): array

    {

        return [

            'data' => AcademicSessionResource::collection($this->collection),

        ];

    }

    public function with(Request $request): array

    {

        return [

            'status' => true,

            'message' => 'Academic sessions fetched successfully',

            'count' => $this->collection->count(),

        ];

    }
}
