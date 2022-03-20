<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Items;

class ItemImages extends Model
{
    use HasFactory;

	protected $fillable = ['item_id', 'image_url'];

	public function items() {
		return $this->belongsToMany(Items::class);
	}

	public function item() {
		return $this->belongsTo(Items::class, 'item_id');
	}
}
