<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait UserRelationships
{
	//Begin craft placeholder #1
	public function cars_kmlog(){
		return $this->belongsToMany('App\\Models\\Car', 'Kmlog')->withPivot('km', 'picture', 'status', 'observations', 'data', 'user_id', 'car_id');
	}
	public function departments(){
		return $this->belongsToMany('App\\Models\\Department', 'department_users')->withPivot('department_id', 'user_id');
	}
	public function cars(){
		return $this->hasMany('App\\Models\\Car');
	}

	//End craft placeholder #1
}
