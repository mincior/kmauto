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
		return $this->belongsToMany('App\\Models\\User', 'Kmlog')->withPivot('km', 'picture', 'status', 'observatii', 'interval_id', 'user_id', 'car_id');
	}

	public function type(){
		return $this->belongsTo('App\\Models\\Type');
	}
	public function users_calculate(){
		return $this->belongsToMany('App\\Models\\User', 'car_user')->withPivot('user_id', 'car_id');
	}
	//users si departments se construiesc in controller pentru ca trebuie sa tina seama de intervalul curent
	// //totusi la create sunt utile
	// public function departments(){
	// 	return $this->belongsToMany('App\\Models\\Department', 'App\\Models\\CarDep')->withPivot('observatii', 'interval_id','department_id', 'car_id');
	// }

	// public function users(){
	// 	return $this->belongsToMany('App\\Models\\User', 'App\\Models\\UserCar')->withPivot('observatii', 'interval_id', 'user_id', 'car_id');
	// }
	
	public function departments_calculate(){
		return $this->belongsToMany('App\\Models\\Department', 'car_department')->withPivot('department_id', 'car_id');
	}

	//experimental deep relations
	public function department_users(){
		//Foloseste Staudenmeir - hasManyDeep. Trece prin doua tabele pivot (car_deps si department_users) si
		// unul intermediar (departments) pentru a ajunge la user
		return $this->hasManyDeep('App\\Models\\User', ['CarDep', 'App\\Models\\Department', 'App\\Models\\UserDep'])->withIntermediate('App\\Models\\Department');
	}
	
	public function brand(){
		return $this->belongsTo('App\\Models\\Brand');
	}
	
	public function car_consumptions(){
		return $this->hasMany('App\\Models\\CarConsumption');
	}

	//End craft placeholder #1
}
