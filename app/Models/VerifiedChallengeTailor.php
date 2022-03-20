<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifiedChallengeTailor extends Model
{
    use HasFactory;

	protected $fillable = ['tailor_id', 'name', 'description', 'due_date'];

	public function tailor() {
		return $this->belongsTo(Tailor::class, 'tailor_id');
	}

	public function tailors() {
		return $this->belongsToMany(Tailor::class);
	}
}
