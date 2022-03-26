<?php

namespace App\Http\Resources;

use App\Models\CommentArticle;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticlesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'author' => $this->tailor->user->name,
            'avatar' => $this->tailor->user->image_url,
            'title' => $this->title,
            'body' => $this->body,
			'like_count' => $this->like_count,
            'comments' => CommentResource::collection(CommentArticle::where('article_id', '=', $this->id)->get()),
            'created_at' => $this->created_at->format('d M Y, H:i'),
        ];
    }
}
