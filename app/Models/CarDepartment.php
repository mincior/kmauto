<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarDepartment extends Model

{
use HasFactory, CarDepartmentRelationships;
    protected $fillable = [
		'department_id',
		'car_id'
	];
}
