<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tailor extends Model
{
    use HasFactory;

	protected $fillable = ['user_id', 'description', 'category_tailor_id', 'no_ktp', 'status_verification', 'status_tailor'];

	public function user() {
		return $this->belongsTo(User::class, 'user_id');
	}

	public function category() {
		return $this->belongsTo(CategoryTailor::class, 'category_tailor_id');
	}

	public function categories() {
		return $this->belongsToMany(CategoryTailor::class);
	}
}
