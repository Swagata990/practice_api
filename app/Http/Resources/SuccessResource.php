<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SuccessResource extends JsonResource
{
    protected string $message;
    protected int $successCode;

    public function __construct(
        $resource,
        string $message = 'Record processed successfully',
        int $successCode = 200
    ) {
        parent::__construct($resource);

        $this->message = $message;
        $this->successCode = $successCode;
    }

    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'success' => true,
            'code' => $this->successCode,
            'message' => $this->message,
            'data' => $this->resource instanceof JsonResource
                ? $this->resource->toArray($request)
                : $this->resource,
        ];
    }
}
