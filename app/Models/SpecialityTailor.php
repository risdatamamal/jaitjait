<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Speciality;

class SpecialityTailor extends Model
{
    use HasFactory;

	protected $fillable = [
		'tailor_id',
		'speciality_id',
	];

	public function specialities() {
		return $this->belongsToMany(Speciality::class);
	}
}
