<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarDep extends Model

{
use HasFactory, CarDepRelationships;
    protected $fillable = [
		'observatii', 
		'department_id', 
		'car_id', 
		'interval_id', 
	];
	public $timestamps = false;
}
