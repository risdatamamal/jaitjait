<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tailor;
use App\Models\Comment;

class Articles extends Model
{
    use HasFactory;

	protected $fillable = ['tailor_id', 'title', 'body', 'image_url', 'like_count', 'comment_id'];

	public function tailor() {
		return $this->belongsTo(Tailor::class, 'tailor_id');
	}

	public function comments() {
		return $this->belongsToMany(Comment::class);
	}
}
