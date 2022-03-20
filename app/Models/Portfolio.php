<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tailor;

class Portfolio extends Model
{
    use HasFactory;

	protected $fillable = ['tailor_id', 'category_portfolio_id', 'title', 'image_url', 'like_count',];

	public function tailor() {
		return $this->belongsToMany(Tailor::class);
	}
}
