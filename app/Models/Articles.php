<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Articles extends Model
{
    use HasFactory;

	protected $fillable = [
		'title', 'users_id', 'body', 'photo', 'slug', 'author', 'like_count'
	];

	public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
