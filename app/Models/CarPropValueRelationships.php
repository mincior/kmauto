<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

trait CarPropValueRelationships
{
	//Begin craft placeholder #1
	public function car_props(){
		return $this->hasMany('App\\Models\\CarProp');
	}

	//End craft placeholder #1
}
