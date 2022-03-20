<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tailor;

class VerifiedTailor extends Model
{
    use HasFactory;

	protected $fillable = ['tailor_id', 'image_url', 'video_url'];

	public function tailor() {
		return $this->belongsToMany(Tailor::class, 'tailor_id');
	}

	public function tailors() {
		return $this->belongsTo(Tailor::class);
	}
}
