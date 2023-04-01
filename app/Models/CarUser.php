<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarUser extends Model


{
	use CarUserRelationships;

    protected $fillable = [
		'user_id',
		'car_id'
	];
}
