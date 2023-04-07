<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserCar extends Model


{
	use HasFactory, UserCarRelationships;

    protected $fillable = [
		'observatii', 
		'user_id', 
		'car_id', 
		'interval_id', 
	];
	public $timestamps = false;
}
