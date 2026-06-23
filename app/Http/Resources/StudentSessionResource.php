<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentSessionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'studentID'=>$this->student_id,
            'academicSessionId'=>$this->academic_session_id,
            'academicClassId'=>$this->academic_class_id,
            'rollNo'=>$this->roll_no,
            'student'=> new StudentResource($this->whenLoaded('student')),
            'academicSession'=> new AcademicSessionResource($this->whenLoaded('academicSession')),
            'academicClass'=> new AcademicClassResource($this->whenLoaded('academicClass'))
        ];
    }
}
