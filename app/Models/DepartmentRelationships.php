<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait DepartmentRelationships
{
	//Begin craft placeholder #1
	public function users(){
		return $this->belongsToMany('App\\Models\\User', 'department_users')->withPivot('department_id', 'user_id');
	}
	public function cars(){
		return $this->belongsToMany('App\\Models\\Car', 'car_departments')->withPivot('department_id', 'car_id');
	}

	//End craft placeholder #1
}
