<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarUser extends Model


{
	use CarUserRelationships;

    protected $fillable = [
		'observatii', 
		'user_id', 
		'car_id', 
		'interval_id', 
	];
}
