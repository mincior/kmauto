<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait UserRelationships
{
	//Begin craft placeholder #1
	public function cars_kmlog(){
		return $this->belongsToMany('App\\Models\\Car', 'Kmlog')->withPivot('km', 'picture', 'status', 'observatii', 'interval_id', 'user_id', 'car_id');
	}
	public function departments_calculate(){
		return $this->belongsToMany('App\\Models\\Department', 'department_user')->withPivot('department_id', 'user_id');
	}
	public function departments(){
		return $this->belongsToMany('App\\Models\\Department', 'App\\Models\\UserDep')->withPivot('observatii','interval_id', 'department_id', 'user_id');
	}
	public function cars_calculate(){
		return $this->belongsToMany('App\\Models\\Car', 'car_user')->withPivot('user_id', 'car_id');
	}
	public function cars(){
		return $this->belongsToMany('App\\Models\\Car', 'App\\Models\\UserCar')->withPivot('observatii', 'user_id', 'car_id');
	}

	//End craft placeholder #1
}
