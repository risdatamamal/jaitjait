<?php

namespace App\Http\Resources;

use App\Models\Items;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
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
			'items' => Items::where('item_id', '=', $this->item_id)->get(),
            'created_at' => $this->created_at->format('d M Y, H:i'),
        ];
    }
}
