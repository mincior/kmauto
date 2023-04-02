<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait DepartmentRelationships
{
	//Begin craft placeholder #1
	public function users(){
		return $this->belongsToMany('App\\Models\\User', 'UserDepartment')->withPivot('observatii', 'department_id', 'user_id');
	}
	public function cars(){
		return $this->belongsToMany('App\\Models\\Car', 'CarDepartment')->withPivot('observatii', 'department_id', 'car_id');
	}

	//End craft placeholder #1
}
