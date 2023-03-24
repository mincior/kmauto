<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarRelationships
{
	//Begin craft placeholder #1
	public function users(){
		return $this->belongsToMany('App\\Models\\User', 'Kmlog')->withPivot('km', 'picture', 'status', 'observations', 'data', 'user_id', 'car_id');
	}
	public function type(){
		return $this->belongsTo('App\\Models\\Type');
	}
	public function departments(){
		return $this->belongsToMany('App\\Models\\Department', 'car_departments')->withPivot('department_id', 'car_id');
	}
	public function user(){
		return $this->belongsTo('App\\Models\\User');
	}
	public function brand(){
		return $this->belongsTo('App\\Models\\Brand');
	}

	//End craft placeholder #1
}
