<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

	protected $fillable = ['name', 'rating', 'description', 'price', 'stock', 'item_category_id'];

	public function itemCategory() {
		return $this->belongsTo(ItemCategory::class, 'item_category_id');
	}

	public function itemCategories() {
		return $this->belongsToMany(ItemCategory::class);
	}
}
