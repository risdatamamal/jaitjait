<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tailor;

class TailorReview extends Model
{
    use HasFactory;

	protected $fillable = ['tailor_id', 'user_id', 'comment', 'rating'];

	public function users() {
		return $this->belongsToMany(User::class);
	}

	public function tailor() {
		return $this->belongsTo(Tailor::class, 'tailor_id');
	}
}
