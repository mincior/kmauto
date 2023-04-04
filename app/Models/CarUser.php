<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarUser extends Model


{
	use HasFactory, CarUserRelationships;

    protected $fillable = [
		'observatii', 
		'user_id', 
		'car_id', 
		'interval_id', 
	];
	public $timestamps = false;
}
