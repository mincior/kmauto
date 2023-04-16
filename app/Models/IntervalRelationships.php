<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait IntervalRelationships
{
	//Begin craft placeholder #1
	public function userCars(){
		return $this->hasMany('App\\Models\\UserCar');
	}
	public function kmlogs(){
		return $this->hasMany('App\\Models\\Kmlog');
	}
	public function userDepartments(){
		return $this->hasMany('App\\Models\\UserDep');
	}
	public function settings(){
		return $this->hasMany('App\\Models\\Setting');
	}
	public function carDepartments(){
		return $this->hasMany('App\\Models\\CarDep');
	}
	public function month(){
		return $this->belongsTo('App\\Models\\Month');
	}
	public function car_consumptions(){
		return $this->hasMany('App\\Models\\CarConsumption');
	}

	//End craft placeholder #1
}
