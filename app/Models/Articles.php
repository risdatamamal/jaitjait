<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tailor;

class Articles extends Model
{
    use HasFactory;

	protected $fillable = ['tailor_id', 'title', 'body', 'image_url'];

	public function tailor() {
		return $this->belongsTo(Tailor::class, 'tailor_id');
	}
}
