<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
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
            'card_id' => $this->card_id,
            'title' => $this->title,
            'description' => $this->description,
            'start_date' => $this->start_date,
            'due_at' => $this->due_at?->toISOString(),
            'is_completed' => $this->completed_at !== null,
            'created_at' => $this->created_at?->toISOString(),
        ];
    }
}
