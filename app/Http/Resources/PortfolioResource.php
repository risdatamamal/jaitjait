<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PortfolioResource extends JsonResource
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
            'id' => $this->id,
			'tailor_id' => $this->tailor_id,
            'author' => $this->tailor->user->name,
            'avatar' => $this->tailor->user->image_url,
            'category' => $this->tailor->category->name,
            'image_url' => $this->image_url,
            'description' => $this->description,
			'like_count' => $this->like_count,
            'created_at' => $this->created_at->format('d M Y, H:i'),
        ];
    }
}
