<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Article;

class CommentArticle extends Model
{
    use HasFactory;

		protected $fillable = ['article_id', 'user_id', 'body'];

	public function users() {
		return $this->belongsToMany(User::class);
	}

	public function article() {
		return $this->belongsTo(Article::class, 'article_id');
	}

}
