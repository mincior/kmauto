<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait IntervalRelationships
{
	//Begin craft placeholder #1
	public function carUsers(){
		return $this->hasMany('App\\Models\\CarUser');
	}
	public function kmlogs(){
		return $this->hasMany('App\\Models\\Kmlog');
	}
	public function userDepartments(){
		return $this->hasMany('App\\Models\\UserDepartment');
	}
	public function settings(){
		return $this->hasMany('App\\Models\\Setting');
	}
	public function carDepartments(){
		return $this->hasMany('App\\Models\\CarDepartment');
	}
	public function month(){
		return $this->belongsTo('App\\Models\\Month');
	}

	//End craft placeholder #1
}
