<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'name' => $this->name,
            'gurdianName'=>$this->gurdian_name,
            'address'=>$this->address,
            'gender'=>$this->gender,
            'emailId'=>$this->email_id,
            'phoneNo'=>$this->phone_no,
            'dob'=>$this->dob
        ];
    }
}
