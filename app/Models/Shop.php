<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

	protected $fillable = ['tailor_id', 'item_id'];

	public function tailor() {
		return $this->belongsTo(Tailor::class, 'tailor_id');
	}

	public function tailors() {
		return $this->belongsToMany(Tailor::class);
	}
}
