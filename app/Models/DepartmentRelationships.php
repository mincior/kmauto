<?php

namespace App\Models;
use App\Models\Month;
use App\Models\Interval;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait DepartmentRelationships
{
	//Begin craft placeholder #1
	public function users(){
		return $this->belongsToMany('App\\Models\\User', 'App\\Models\\UserDep')->withPivot('observatii', 'interval_id', 'department_id', 'user_id');
	}
	public function cars(){
		return $this->belongsToMany('App\\Models\\Car', 'App\\Models\\CarDep')->withPivot('observatii', 'interval_id', 'department_id', 'car_id');
	}

	//End craft placeholder #1
}
