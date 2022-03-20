<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Portfolio;

class Comment extends Model
{
    use HasFactory;

	protected $fillable = ['portfolio_id', 'user_id', 'body'];

	public function users() {
		return $this->belongsToMany(User::class);
	}

	public function portfolio() {
		return $this->belongsTo(Portfolio::class);
	}
}
