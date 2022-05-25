<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CompanyResource;
use Carbon\Carbon;

class VocationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'uuid' => $this->uuid,
            'title' => $this->title,
            'workplace_type' => $this->workplace_type,
            'location' => $this->location,
            'employment_type' => $this->employment_type,
            'description' => $this->description,
            'notification' => $this->notification,
            'created_at' => Carbon::create($this->created_at)->diffForHumans(),
            'company' => new CompanyResource($this->company),
        ];
    }
}
