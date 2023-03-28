<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

trait CarRelationships
{
	use HasRelationships ;
	//Begin craft placeholder #1
	public function kmlog_users(){
		return $this->belongsToMany('App\\Models\\User', 'Kmlog')->withPivot('km', 'picture', 'status', 'observations', 'data', 'user_id', 'car_id');
	}
	public function type(){
		return $this->belongsTo('App\\Models\\Type');
	}
	public function departments(){
		return $this->belongsToMany('App\\Models\\Department', 'car_departments')->withPivot('department_id', 'car_id');
	}
	public function department_users(){
		//trece prin doua tabele pivot (car_departments si department_users) si unul intermediar (departments) pentru a ajunge la user
		return $this->hasManyDeep('App\\Models\\User', ['car_departments', 'App\\Models\\Department', 'department_users'])->withIntermediate('App\\Models\\Department');
	}
	public function brand(){
		return $this->belongsTo('App\\Models\\Brand');
	}

	//End craft placeholder #1
}
