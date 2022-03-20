<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;
use App\Models\District;
use App\Models\Province;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role_id',
		'image_url',
		'gender',
		'district_id',
		'province_id',
		'birthday',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	public function role() {
		return $this->belongsTo(Role::class, 'role_id');
	}

	public function district() {
		return $this->belongsTo(District::class, 'district_id');
	}

	public function province() {
		return $this->belongsTo(Province::class, 'province_id');
	}

	public function roles() {
		return $this->belongsToMany(Role::class);
	}

	public function districts() {
		return $this->belongsToMany(District::class);
	}

	public function provinces() {
		return $this->belongsToMany(Province::class);
	}
}
