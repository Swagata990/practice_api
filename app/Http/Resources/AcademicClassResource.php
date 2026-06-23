<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AcademicClassResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'academicStandardId' => $this->academic_standard_id,
            'isActive' => $this->is_active,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
            // 'academicStandard'=>  $this-> academicStandard
             'academicStandard'=> new AcademicStandardResource($this->whenLoaded('academicStandard'))
        ];
    }
}
